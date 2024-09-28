<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header avec Tailwind CSS</title>
    <!-- Inclure Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-xl font-bold text-blue-600">
                <a href="#">MonSite</a>
            </div>

            <!-- Menu de navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-700 hover:text-blue-600">Accueil</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">À propos</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>
