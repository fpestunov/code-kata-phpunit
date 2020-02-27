# Code Katas with PHPUnit

If martial artists use kata as a method for exercise and practice, what might be the equivalent for coders like us? Coding katas are short, repeatable programming challenges which are meant to exercise everything from your focus, to your workflow.

In this series, one kata per episode, we'll work through a wide variety of challenges to build up your TDD process.

## 01. 60-Second PHPUnit Setup

Before we attempt our first coding kata, let's first take a moment to setup a base directory for our exercises. We'll use Composer to pull in PHPUnit and then register PSR-4 autoloading for the project.

1. Инициализация проекта

```sh
mkdir name & cd name
composer require phpunit/phpunit
```

3. Добавляем папки `src` и `test`
4. В композере прописываем psr-4
5. `composer dump-autoload`
6. `vendor/bin/phpunit test`

## 02. Fizz Buzz

## 03. String Calculator Kata

Next up is the string calculator kata. Our job is to create a class with a single public method that accepts a string of numbers to add. However, as part of the kata, a number of requirements must first be met, such as disallowing negative numbers and ignoring numbers greater than 1,000. Let's get started.

- сделаем метод add() и тест для 0;
- сделаем тест для 1 числа;
