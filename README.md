![](https://media.giphy.com/media/3o7TKJG8p39T1hJFLO/giphy.gif)

## RocketPizza

Welcome to RocketPizza! Order tasty fruitpizza have it at your door in the near future! Built with Laravel.

## Installation

1. Clone the repository to your computer.

2. Cd into the project via terminal.

3. Type "composer update" in terminal. Create your own .env (you can use .env.example as reference).

4. Start the application with "php artisan serve" via terminal.

## Code Review (by Mark Mados and Victor Stranne)

- routes/web.php, L31 : This route doesn't seem to do anything, perhaps remove it! Same goes with the HomeController.php!
- partials/head.blade.php, L13 : album.css doesn't seem to exist
- RegisterController, L21 : Minimum characters is set to 3... what if you're name is Bo? ;)
- You have implemented bootstrap in a great way, good choice for a backend project!
- welcome.blade.php : Maybe remove the default laravel welcome page :P
- routes/web.php L28 : Since you don't have a middleware, you can reach the register page even though you're logged in, add ->middleware('guest') to prevent this.
- Perhaps install clockwork so you can easily monitor your laravel project!
- Great naming of everything lol
- Could be nice to be able to edit your account info, or even delete it!
- When ordering pizza and accidently didn't complete the input form, the error message shows up at the top and is abit difficult to see at first.
- Are you just a badass att typing great indented code or are you using intelephense? either way, good job
- I keep trying to order a banana pizza, but it tells me I order fruit pizza ;´(
- DashboardController : doesn't seem to do much except return a view, maybe just do a view in routes/web.php instead.
- LoginController : no validation on the request
- nav.blade.php L41-49 : Weird solution, maybe try and write it abit different. Would be enough with an a-tag or a submit button.
- LogoutTest.php - You're not testing anything
- phpunit.xml, L24-25: renove comments so database doesn't reset everytime you run a test
- In your tests, instead of making a user yourself you could use the User factory.
- You have such a great structure in your project
- head.blade.php, L8 : comment is in swedish

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Creators

- Rikard
- Linn
