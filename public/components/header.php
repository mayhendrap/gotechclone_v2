<?php

  $title = '';

  if ($_SERVER["REQUEST_URI"] === "/") {
    $title = "Home";
  } elseif ($_SERVER["REQUEST_URI"] === "/about.php") {
    $title = "About";
  } elseif ($_SERVER["REQUEST_URI"] === "/portofolio.php") {
    $title = "Portofolio";
  } elseif ($_SERVER["REQUEST_URI"] === "/product.php") {
    $title = "Product";
  } elseif ($_SERVER["REQUEST_URI"] === "/career.php") {
    $title = "Career";
  } elseif ($_SERVER["REQUEST_URI"] === "/blog.php") {
    $title = "Blog";
  } elseif ($_SERVER["REQUEST_URI"] === "/viewdetails.php") {
    $title = "View Details";
  } else {
    $title = "404 || Not Found";
  }

  $page = $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?= $title ?>
    </title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- tailwind compiled css -->
    <link rel="stylesheet" href="./css/min.css" />
    <?php if($_SERVER["REQUEST_URI"] === "/index.php" || $_SERVER["REQUEST_URI"] === "/")  : ?>
      <link rel="stylesheet" href="./css/flickity.min.css" />
    <?php endif; ?>
  </head>

  <?php if($_SERVER["REQUEST_URI"] === "/viewdetails.php")  : ?>
    <body
      x-data="{ modal: false }"
      :class="{'bg-gray-100 bg-opacity-100' : modal === true}"
    >
  <?php else : ?>
    <body>
  <?php endif; ?>

    <!-- Header -->
    <header x-data="{ open: false }">
      <nav class="container px-6 py-3 md:px-16 lg:px-6 lg:py-6">
        <div class="flex items-center justify-between">
          <div class="md:flex items-center lg:w-full">
            <img src="./img/logo/logo.png" alt="Gotech-Logo" class="w-26" />
            <div class="hidden lg:block ml-20 mr-20">
              <ul class="flex text-sm">
                <li class="px-4 flex flex-col items-center<?= $page === '/' || $page === '/index.php' ? ' text-purple-600' : '' ?>">
                  <a href="/">
                    Home
                  </a>
                  <small class="dot">
                    <?= $page === '/' || $page === '/index.php' ? '.' : '' ?>
                  </small>
                </li>
                <li class="px-4 flex flex-col items-center<?= $page === '/about.php' ? ' text-purple-600' : '' ?>">
                  <a href="/about.php">
                    About
                  </a>
                  <small class="dot">
                    <?= $page === '/about.php' ? '.' : '' ?>
                  </small>
                </li>
                <li class="px-4 flex flex-col items-center<?= $page === '/portofolio.php' ? ' text-purple-600' : '' ?>">
                  <a href="/portofolio.php">
                    Portfolio
                  </a>
                  <small class="dot">
                    <?= $page === '/portofolio.php' ? '.' : '' ?>
                  </small>
                </li>
                <li class="px-4 flex flex-col items-center<?= $page === '/product.php' ? ' text-purple-600' : '' ?>">
                  <a href="/product.php">
                    Product
                  </a>
                  <small class="dot">
                    <?= $page === '/product.php' ? '.' : '' ?>
                  </small>
                </li>
                <li class="px-4 flex flex-col items-center<?= $page === '/career.php' ? ' text-purple-600' : '' ?>">
                  <a href="/career.php">
                    Career
                  </a>
                  <small class="dot">
                    <?= $page === '/career.php' ? '.' : '' ?>
                  </small>
                </li>
                <li class="px-4 flex flex-col items-center<?= $page === '/blog.php' ? ' text-purple-600' : '' ?>">
                  <a href="/blog.php">
                    Blog
                  </a>
                  <small class="dot">
                    <?= $page === '/blog.php' ? '.' : '' ?>
                  </small>
                </li>
              </ul>
            </div>
            <div class="hidden relative mr-8 lg:block ">
              <input
                type="text"
                name="search"
                id="search"
                placeholder="Search Here"
                class="pl-6 pr-10 border border-purple-400 rounded py-2"
              />
              <svg
                class="w-6 text-purple-400 absolute top-0 right-0 mt-2 mx-3"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                />
              </svg>
            </div>
            <button class="hidden btn-header-primary lg:block">
              Contact Us
            </button>
          </div>
          <div class="lg:hidden">
            <svg
              @click="open = !open"
              class="fill-current w-6 text-purple-500 md:w-8"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </div>
        </div>
      </nav>
      <div
        :class="{ 'hidden' : open === false }"
        class="border-t lg:hidden relative md:mr-8"
      >
        <ul
          class="z-10 flex flex-col items-end px-8 absolute right-0 w-full bg-white"
        >
          <li class="py-3 border-b<?= $page === '/' || $page === '/index.php' ? ' text-purple-600' : '' ?>">
            <a href="/">
              Home
            </a>
          </li>
          <li class="py-3 border-b<?= $page === '/about.php' ? ' text-purple-600' : '' ?>">
            <a href="/about.php">
              About
            </a>
          </li>
          <li class="py-3 border-b<?= $page === '/portofolio.php' ? ' text-purple-600' : '' ?>">
            <a href="/portofolio.php">
              Portofolio
            </a>
          </li>
          <li class="py-3 border-b<?= $page === '/product.php' ? ' text-purple-600' : '' ?>">
            <a href="/product.php">
              Product
            </a>
          </li>
          <li class="py-3 border-b<?= $page === '/career.php' ? ' text-purple-600' : '' ?>">
            <a href="/career.php">
              Career
            </a>
          </li>
          <li class="py-3 border-b<?= $page === '/blog.php' ? ' text-purple-600' : '' ?>">
            <a href="/blog.html">
              Blog
            </a>
          </li>
        </ul>
      </div>
    </header>
    <!-- End Header -->
