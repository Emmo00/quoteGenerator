<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>QuoteGenerator</title>
        <meta http-equiv="refresh" content="2" />
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
        />
    </head>
    <body
        class="flex flex-col h-screen justify-between font-sans bg-black text-white"
    >
        <div class="flex flex-row justify-between p-7">
            <h1 class="text-3xl font-bold">QuoteGenerator</h1>
            <div><a href="/fav">View Favorites</a></div>
        </div>