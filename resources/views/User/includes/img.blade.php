<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
    <title>
        Maintenance services
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS Files -->
    <!-- <link id="pagestyle" href="user/assets/css/style.css" rel="stylesheet" /> -->
    <style>
        @import url("https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css");
@import url("https://fonts.googleapis.com/css2?family=Exo+2:wght@300;500;700&display=swap");

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  --color: rgba(30, 30, 30);
  --bgColor: rgba(245, 245, 245);
  min-height: 100vh;
  display: grid;
  align-content: center;
  gap: 2rem;
  padding: 2rem;
  font-family: "Exo 2", sans-serif;
  color: var(--color);
  background: var(--bgColor);
}

h1 { text-align: center }

ol {
  width: min(60rem, 90%);
  margin-inline: auto;

  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 2rem;

  list-style: none;
  counter-reset: stepnr;
}

li:nth-child(6n + 1) { --accent-color: #b8df4e }
li:nth-child(6n + 2) { --accent-color: #4cbccb }
li:nth-child(6n + 3) { --accent-color: #7197d3 }
li:nth-child(6n + 4) { --accent-color: #ae78cb }
li:nth-child(6n + 5) { --accent-color: #7dc7a4 }
li:nth-child(6n + 6) { --accent-color: #f078c2 }

ol li {
  counter-increment: stepnr;
  width: 18rem;
  --borderS: 2rem;
  aspect-ratio: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-left: calc(var(--borderS) + 2rem);
  position: relative;
}
ol li::before,
ol li::after {
  inset: 0;
  position: absolute;
  border-radius: 50%;
  border: var(--borderS) solid var(--bgColor);
  line-height: 1.1;
}
ol li::before {
  content: counter(stepnr);
  color: var(--accent-color);
  padding-left: 10rem;
  font-size: 12rem;
  font-weight: 700;
  overflow: hidden;
}

ol li::after {
  content: "";
  filter: drop-shadow(-0.25rem 0.25rem 0.0675rem rgba(0, 0, 0, 0.75)) blur(5px);
}

ol li > * { width: 7.5rem }
ol li .icon { font-size: 2rem; color: var(--accent-color); text-align: center }
ol li .title { font-size: 2rem; font-weight: 500 }
ol li .descr { font-size: 0.8rem; font-weight: 300 }

.credits { margin-top: 2rem; text-align: right }
.credits a { color: var(--color) }

    </style>
</head>

<body>

<h1>OL circle cards</h1>
<ol>
    <li >
        <div class="icon"><i class="fa-solid fa-bicycle"></i></div>
        <div class="title">Step 1</div>
        <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
    </li>
    <li >
        <div class="icon"><i class="fa-solid fa-car"></i></div>
        <div class="title">Step 2</div>
        <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
    </li>
    <li >
        <div class="icon"><i class="fa-solid fa-helicopter"></i></div>
        <div class="title">Step 3</div>
        <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
    </li>
    <li >
        <div class="icon"><i class="fa-solid fa-plane"></i></div>
        <div class="title">Step 4</div>
        <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
    </li>
    <li >
        <div class="icon"><i class="fa-solid fa-rocket"></i></div>
        <div class="title">Step 5</div>
        <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
    </li>
    <li >
        <div class="icon"><i class="fa-solid fa-bus"></i></div>
        <div class="title">Step 6</div>
        <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, porro.</div>
    </li>
</ol>
<div class="credits">
    <a target="_blank" href="https://www.freepik.com/premium-vector/vector-infographic-design-template-with-icons-8-options-steps_10571883.htm">inspired by</a>
</div>