<?php

use Behat\MinkExtension\Context\RawMinkContext;

require_once __DIR__ . '/../../vendor/autoload.php';

class CadUserContext extends RawMinkContext
{

    /**
     * @Given I'm on Login page
     */
    public function imOnLoginPage()
    {
        $this->getSession()->visit($this->locatePath('/'));
    }

    /**
     * @When I access the sign up page
     */
    public function iAccessTheSignUpPage()
    {
        $this->getSession()->wait(
            5000, 
            "document.readyState === 'complete'"
        );
        $this->getSession()->getPage()->clickLink("signup");
    }

    /**
     * @When fill name with :name
     */
    public function fillNameWith($name)
    {
        $this->getSession()->wait(
            5000, 
            "document.querySelector('#user_name').style.display != 'none'"
        );
        $this->getSession()->getPage()->fillField("user_name", $name);
    }

    /**
     * @When fill email with :email
     */
    public function fillEmailWith($email)
    {
        $this->getSession()->getPage()->fillField("user_email", $email);
    }

    /**
     * @When fill password with :password
     */
    public function fillPasswordWith($password)
    {
        $this->getSession()->getPage()->fillField("user_password", $password);
    }
    
    /**
     * @When add user
     */
    public function addUser()
    {
        $this->getSession()->getPage()->pressButton("signup");
    }

    /**
     * @Then the user must be add with success
     */
    public function theUserMustBeAddWithSuccess()
    {
        $this->getSession()->wait(3000);
        $page = $this->getSession()->getPage();

        $successMessage = $page->find('css', 'h1')->getText();

        \PHPUnit_Framework_TestCase::assertEquals(
            'Successfully added user.',
            $successMessage
        );
    }

}
