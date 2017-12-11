<?php

use Behat\MinkExtension\Context\RawMinkContext;

require_once __DIR__ . '/../../vendor/autoload.php';

class UserLoginContext extends RawMinkContext
{

    /**
     * @Given I'm on Login page
     */
    public function imOnLoginPage()
    {
        $this->getSession()->visit($this->locatePath('/'));
    }

    /**
     * @When I fill email with :email
     */
    public function iFillEmailWith($email)
    {
        $this->getSession()->wait(
            5000, 
            "document.querySelector('#email').style.display != 'none'"
        );
        $this->getSession()->getPage()->fillField("email", $email);
    }

    /**
     * @When fill password with :password
     */
    public function fillPasswordWith($password)
    {
        $this->getSession()->getPage()->fillField("password", $password);
    }

    /**
     * @When press button Sign in
     */
    public function pressButtonSignIn()
    {
        $this->getSession()->getPage()->pressButton("signin");
    }

    /**
     * @Then an error message should be shown
     */
    public function anErrorMessageShouldBeShown()
    {
        $this->getSession()->wait(3000);
        $page = $this->getSession()->getPage();

        $failMessage = $page->find('css', 'h1')->getText();

        \PHPUnit_Framework_TestCase::assertEquals(
            'Failed to login.',
            $failMessage
        );
    }

    /**
     * @Then a successfully message should be shown
     */
    public function aSuccessfullyMessageShouldBeShown()
    {
        $this->getSession()->wait(3000);
        $page = $this->getSession()->getPage();

        $successMessage = $page->find('css', 'h1')->getText();

        \PHPUnit_Framework_TestCase::assertEquals(
            'Successfully logged in.',
            $successMessage
        );
    }
}
