
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Arrays;
import java.util.Calendar;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import java.util.TimeZone;

public class ICBNPrayerTimeParser {

	public static void main(String[] args) throws IOException {

		ICBNPrayerTimeParser parser = new ICBNPrayerTimeParser();

		String filename = args[0];
		String iqamafilename = args[1];

		if (args.length < 1) {
			System.out.println(parser.getClass().getName() + "<file name>");
			System.exit(0);
		}

		System.out.println("Parsing file:" + filename);

		File file = new File(filename);
		if (!file.isFile()) {
			System.out.println(filename + " is not a valid file ....");
			System.exit(0);
		}

		parser.parseResource(file, new File(iqamafilename));


	}

	private boolean monthEndingIn31Days(int month){
        // Reports are required for months with 31 days.
        return ((month == Calendar.JANUARY) || 
                (month == Calendar.MARCH) || 
                (month == Calendar.MAY) ||
                (month == Calendar.JULY) || 
                (month == Calendar.AUGUST) || 
                (month == Calendar.OCTOBER) ||
                (month == Calendar.DECEMBER));
	}
	
	public StringBuffer[] parseIqamaRangeIntoBuffers(File file) throws IOException {

		SimpleDateFormat f = new SimpleDateFormat("hh:mm");
		Calendar cal = Calendar.getInstance(TimeZone.getDefault());
		int daysInMonth = cal.getActualMaximum(Calendar.DAY_OF_MONTH);
		//System.out.println("days in month:" + daysInMonth);
		
		//fiqama, ziqama,Aiqama, Iiqama,
		StringBuffer iqamaTimes[] = new StringBuffer[6];
		for(int i=0; i<iqamaTimes.length; i++){
			iqamaTimes[i] = new StringBuffer();
		}
		
		BufferedReader buf_in = new BufferedReader(new FileReader(
				file));

		String str = "q";
		
		try {

			// Read line by line.
			while ((str = buf_in.readLine()) != null) {
				
				//TO:DO validate file for proper format
				String[] iqamas = str.split("\\s+");
				//System.out.println("split:"+ iqamas.length);
				String first = iqamas[0];
				
				String[] day = first.split("-");
				int fromDay = Integer.parseInt(day[0]);
				int toDay = Integer.parseInt(day[1]);
				
				for(int daycount=fromDay; daycount<=toDay; daycount++ ){

					for(int k=0; k<iqamas.length; k++){
						System.out.println(iqamas[k]);
						iqamaTimes[k] = iqamaTimes[k].append(iqamas[k]).append(",");
					}
				}
			}
		} catch (IOException e) {
			System.out.println("IO exception = " + e);
		}
		
		return iqamaTimes;
		
	}
	
	public void parseResource(File file, File file2) throws IOException {

		SimpleDateFormat f = new SimpleDateFormat("hh:mm");
		Calendar cal = Calendar.getInstance(TimeZone.getDefault());
		int thisMonth = cal.get(Calendar.MONTH);
		int daysInMonth = cal.getActualMaximum(Calendar.DAY_OF_MONTH);
		int colInPrayerTable = 7;
		System.out.println("days in month:" + daysInMonth);
		BufferedReader buf_in = new BufferedReader(new FileReader(
				file));

		String str = "q";

		//f, sunrise, z, A, M, I
		StringBuffer prayerTimes[] = new StringBuffer[6];
		
		
		//initialize prayerTime buffers;
		for(int i=0; i<prayerTimes.length; i++){
			prayerTimes[i] = new StringBuffer();
		}
		
		int lines=0; 
		
		try {

			// Read line by line.
			while ((str = buf_in.readLine()) != null) {
				
				if(lines>= daysInMonth) break;

				str = str.replaceAll("\\s+\t",",");
				System.out.println(str);
					
				//TO:DO validate file for proper format
				String[] prayers = str.split(",");
				System.out.println("split:"+ prayers.length);
				
				for(int p=0; p<6; p++){
					prayerTimes[p] = prayerTimes[p].append(prayers[p]).append(",");
				}

			}
		} catch (IOException e) {
			System.out.println("IO exception = " + e);
		}

		
		StringBuffer[] iqamaTimes = parseIqamaRangeIntoBuffers(file2);
		
		for(StringBuffer buffer: prayerTimes){
			System.out.println(buffer.toString());
		}
		
		for(StringBuffer buffer: iqamaTimes){
			System.out.println(buffer.toString());
		}
		
		printResults(prayerTimes, iqamaTimes);
		
	}

	private String[] getIqamaTimeForDay(int day, Map<String, String[]> map){
		Iterator<String> it = map.keySet().iterator();
		String[] iqama = new String[0];
		while(it.hasNext()){
			String key = it.next();
			List<String> list = Arrays.asList(key.split("-"));
			iqama = map.get(key);

			if(day >= Integer.parseInt(list.get(0)) && day <= Integer.parseInt(list.get(1))){
			return iqama;
			}
		}
		return iqama;
	}
	private void printMap(Map<String,String[]> map){
		Iterator<String> it = map.keySet().iterator();
		while(it.hasNext()){
			String key = it.next();
			System.out.println(key +" " + Arrays.toString(map.get(key)));
		}
	}
	private void printArray(String[][] str){
		
        for (String[] arr : str) {
            System.out.println(Arrays.toString(arr));
        }
	}

	private void printResults(StringBuffer[] azan, StringBuffer[] iqama) throws IOException {
		BufferedWriter writer = new BufferedWriter(new FileWriter(
				"template.out"));
		PrintWriter print_writer = new PrintWriter(writer, true);
		String[] names = new String[10];
		names[0] = "$fajr = explode(";
		names[1] = "$fajr_iqama = explode(";
		names[2] = "$sunrise = explode(";
		names[3] = "$zuhur = explode(";
		names[4] = "$zuhur_iqama = explode(";
		names[5] = "$asr = explode(";
		names[6] = "$asr_iqama = explode(";
		names[7] = "$maghrib = explode(";
		names[8] = "$isha = explode(";
		names[9] = "$isha_iqama = explode(";

		String token1 = "\",\",\"0,";
		String token2 =  "0\"" + ");";
			print_writer.println(names[0] + token1 + azan[0] + token2);
			print_writer.println(names[1] + token1 + iqama[1] + token2);
			
			print_writer.println(names[2] + token1 + azan[1] + token2);
			
			print_writer.println(names[3] + token1 + azan[2] + token2);
			print_writer.println(names[4] + token1 + iqama[2] + token2);
			
			print_writer.println(names[5] + token1 + azan[3] + token2);
			print_writer.println(names[6] + token1 + iqama[3] + token2);
			
			print_writer.println(names[7] + token1 + azan[4] + token2);
			
			print_writer.println(names[8] + token1 + azan[5] + token2);
			print_writer.println(names[9] + token1 + iqama[5] + token2);

			print_writer.close();
			writer.close();
	}

}

/*
 * Valid output: ================ $fajr = explode(",",
 * "0,5:42,5:42,5:42,5:42,5:42,5:42,5:42,5:42,5:42,5:42,5:42,5:42,5:42,5:41,5:41,5:41,5:41,5:40,5:40,5:40,5:39,5:39,5:38,5:38,5:37,5:36,5:36,5:35,5:34,5:34,5:33,0"
 * ); $fajr_iqama = explode(",",
 * "0,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,6:15,0"
 * ); $sunrise = explode(",",
 * "0,7:19,7:19,7:19,7:19,7:19,7:19,7:19,7:19,7:19,7:18,7:18,7:18,7:18,7:17,7:17,7:17,7:16,7:16,7:16,7:15,7:14,7:13,7:13,7:12,7:11,7:11,7:10,7:09,7:08,7:07,7:06,0"
 * ); $zuhur = explode(",",
 * "0,12:00,12:00,12:01,12:01,12:02,12:02,12:03,12:03,12:03,12:04,12:04,12:05,12:05,12:05,12:06,12:06,12:06,12:07,12:07,12:07,12:08,12:08,12:08,12:08,12:09,12:09,12:09,12:09,12:10,12:10,12:10,0"
 * ); $zuhur_iqama = explode(",",
 * "0,12:30,12:30,12:30,1:10,1:15,1:15,12:30,12:30,12:30,12:30,1:10,1:15,1:15,12:30,12:30,12:30,12:30,1:10,1:15,1:15,12:30,12:30,12:30,12:30,1:10,1:15,1:15,12:30,12:30,12:30,12:30,0"
 * ); $asr = explode(",",
 * "0,3:00,3:01,3:01,3:02,3:03,3:04,3:05,3:06,3:07,3:08,3:10,3:10,3:11,3:12,3:13,3:15,3:16,3:17,3:17,3:19,3:20,3:21,3:23,3:24,3:25,3:26,3:27,3:29,3:30,3:31,3:32,0"
 * ); $asr_iqama = explode(",",
 * "0,3:30,3:30,3:30,3:30,3:30,3:30,3:30,3:30,3:30,3:30,3:30,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,3:45,0"
 * ); $maghrib = explode(",",
 * "0,4:40,4:41,4:42,4:43,4:44,4:45,4:46,4:47,4:48,4:49,4:50,4:51,4:52,4:53,4:54,4:55,4:56,4:57,4:57,5:00,5:01,5:02,5:03,5:04,5:06,5:07,5:08,5:09,5:10,5:12,5:13,0"
 * ); $isha = explode(",",
 * "0,6:18,6:19,6:20,6:20,6:21,6:22,6:23,6:24,6:25,6:26,6:27,6:28,6:28,6:29,6:30,6:31,6:32,6:33,6:33,6:35,6:36,6:37,6:38,6:39,6:40,6:41,6:42,6:44,6:45,6:46,6:47,0"
 * ); $isha_iqama = explode(",",
 * "0,7:30,7:30,7:30,7:30,7:30,7:30,7:30,7:30,7:30,7:30,7:30,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,7:45,0"
 * );
 */
