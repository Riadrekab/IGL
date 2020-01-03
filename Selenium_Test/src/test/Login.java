package test;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.Alert;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

public interface Login {
	public default WebDriver autentifier(String Nomuser,String mdp) throws Exception
	{
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Lenovo Ideapad\\Downloads\\Programme\\chromedriver_win32 (1)\\chromedriver.exe");
		WebDriver drv = new ChromeDriver();
		drv.get("http://localhost/IGL/Front-end/Login/");
		TimeUnit.SECONDS.sleep(5);	
		//drv.findElement(By.id(“username”));
		drv.findElement(By.id("username")).sendKeys(Nomuser);
		drv.findElement(By.id("mdp")).sendKeys(mdp);
		drv.findElement(By.id("login")).click();
		try{
			   //Wait 10 seconds till alert is present
			   WebDriverWait wait = new WebDriverWait(drv, 10);
			   Alert alert = wait.until(ExpectedConditions.alertIsPresent());
               System.out.println(alert.getText());
			   //Accepting alert.
			   alert.accept();
			   System.out.println("Test de Log-in terminé avec échec");
			}catch(Throwable e){
				 System.out.println("Test de Log-in terminé avec succées");
			}
		return drv;
	
	}
}
