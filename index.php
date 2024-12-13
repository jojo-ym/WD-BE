<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Page</title>
    <link rel="icon" type="image/png" href="img/jo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(23, 20, 23);
            background-size: cover;
            min-height: 100vh;
            padding: 25px;
            display: flex;
            align-items: center;
            background-color: rgb(227, 224, 227);
        }


        .buttonContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 20px;
        }

        .buttonContainer button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: rgb(23, 20, 23);
            color: rgb(227, 224, 227);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.3s ease;
        }

        .buttonContainer button:hover {
            background-color: rgb(227, 224, 227);
            color: rgb(23, 20, 23);
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .buttonContainer button {
                padding: 8px 15px;
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .buttonContainer {
                flex-direction: column;
                align-items: center;
            }

            .buttonContainer button {
                width: 100%;
                max-width: 300px;
                padding: 6px 12px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="h4" style="text-align: start; font-size: clamp(1rem, 2vw, 3rem);">
                    Hi, I'm
                </div>
                <div class="h1" style="text-align: start; font-size: clamp(1.7rem, 4vw, 5rem); font-weight: bold;">
                    Joshua
                </div>
                <div class="h1" style="text-align: start; font-size: clamp(1.7rem, 4vw, 5rem); font-weight: bold;">
                    Malabanan
                </div>
                <div class="h5" style="text-align: start; font-size: clamp(.63rem, 1.5vw, 2rem); margin-bottom: 15px;">
                    A third-year college student pursuing a Bachelor of Science in Information Technology.
                </div>
                <div class="h5" style="text-align: start; font-size: clamp(.60rem, 1.3vw, 2rem); margin-bottom: 5px;">
                    Find me on:
                </div>
                <div class="imgContainer">
                    <img src="img/fb.png" width="2%" alt="">
                    <img src="img/github.png" width="2%">
                    <img src="img/ig.png" width="2%" alt="">
                </div>
                <div class="projectContainer">
                    <h1 class="display-3 text-start" style="margin-top: 50px;">
                        <button type="button" onclick="expandContent()" class="btn btn-outline-secondary"
                            id="btnExpand">Check out my Projects</button>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="footer" style="display: none;">
            <div class="row justify-content-center">
                <div class="col-auto p-5">
                    <div class="buttonContainer">
                        <button type="button" onclick="window.location.href='A08/index.php'">Island
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <script>
        var display = "none";

        function expandContent() {
            var footer = document.getElementById("footer");
            var btnExpand = document.getElementById("btnExpand");

            if (display == "none") {
                footer.style.display = "block";
                display = "block";
                btnExpand.innerHTML = "Close";
            } else {
                footer.style.display = "none";
                display = "none";
                btnExpand.innerHTML = "Check out my Projects";
            }
        }

    </script>
</body>

</html>

<body></body>