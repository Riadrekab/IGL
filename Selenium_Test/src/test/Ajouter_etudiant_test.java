package test;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.Alert;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

public class  Ajouter_etudiant_test implements Login {
	
	
    public void test() throws Exception
    {
    	WebDriver drv= this.autentifier("ryadh3011","11082000");	
    	TimeUnit.SECONDS.sleep(5);
    	this.ajouter_etudiant(drv, "09/126", "test_nom", "test_prenom", "test_user", "test_mdp");
		try{
			   //Wait 10 seconds till alert is present
			   WebDriverWait wait = new WebDriverWait(drv, 10);
			   Alert alert = wait.until(ExpectedConditions.alertIsPresent());
               String rep=alert.getText();
			   //Accepting alert.
               if (rep.equals("Etudiant ajouté avec succes"))
               {
                System.out.println("Test d'ajout d'un étudiant terminé avec succées");
               }
               else
                {
               if (rep.equals("Le Matricule entré existe deja")){
            	System.out.println("Test terminé avec échec car le  Matricule existe deja");
               }
               else
               {
            	   System.out.println("Test terminé avec échec");   
               }
               }
                
                
			//   alert.accept();
			//   System.out.println("Accepted the alert successfully.");
		   
			}catch(Throwable e){
			   System.err.println("Error came while waiting for the alert popup. "+e.getMessage());
			}
    }
    
    public void ajouter_etudiant(WebDriver drv,String matricule,String nom,String prenom,String username,String mdp)
    {
    drv.findElement(By.id("matricule")).sendKeys(matricule);
    drv.findElement(By.id("nom")).sendKeys(nom);
    drv.findElement(By.id("prenom")).sendKeys(prenom);
    drv.findElement(By.id("NomUtil")).sendKeys(username);
    drv.findElement(By.id("Mdp")).sendKeys(mdp);
    drv.findElement(By.id("ajouter")).click();
    }
    
    }


