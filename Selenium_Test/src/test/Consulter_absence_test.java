package test;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;

public class Consulter_absence_test implements Login {
    public void test() throws Exception
    {
    	try {
    	WebDriver drv= this.autentifier("ryach","11082000");	
    	TimeUnit.SECONDS.sleep(5);
    	System.out.println("Test de consulation d'absence terminé avec succées");
    	    }
    	catch (Exception e)
    	{
    	System.out.print("test terminé avec échec");	
    	}
    }

}
