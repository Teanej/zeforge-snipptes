//da bi koristili Console objekat u C# moramo
//uključiti System biblioteku
using System;

//C# je objektno orijentisani jezik te se Main metoda
//obično nalazi unutar klase zvane Program te ovaj čitav
//snippet bi mogao biti dio Program.cs fajla kojim se 
//pokreće jedna konzolna C# aplikacija
public class Program
{	
	//svaka C# aplikacija svoje izvršavanje 
	//počinje unutar Main metode
	public static void Main()
	{
		//koristeći WriteLine metodu Console objekta
		//možemo ispisati neki tekst u konzoli okruženja
		//u kojem se aplikacija izvršava
		Console.WriteLine("ZeForge Developers Community");
	}
}