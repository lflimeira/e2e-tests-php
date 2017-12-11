Feature: Sign in User
    As a user of website
    I want to sign in
    So that I can access my user private page

    Scenario: Fail to sign in
        Given I'm on Login page
        When I fill email with "xxy@gmail.com"
        And fill password with "123" 
        And press button Sign in
        Then an error message should be shown
  
    Scenario: Sign in successfully
        Given I'm on Login page
        When I fill email with "xxx@gmail.com"
        And fill password with "123" 
        And press button Sign in
        Then a successfully message should be shown
