Feature: Sign up User
    As a user of website
    I want to sign up
    So that I can access a private page

    Scenario: Add a new user
        Given I'm on Login page
        When I access the sign up page
        And fill name with "Luiz Felipe"
        And fill email with "xxx@gmail.com"
        And fill password with "123" 
        And add user
        Then the user must be add with success
