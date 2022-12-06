<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accordion using HTML, CSS, & JavaScript - By W3jar.Com</title>
    <link rel="stylesheet" href="accord.css">
</head>

<body>
<div class="theContainer">
    <div class="w3jar-accordion">
        <ul class="panel">

            <li class="wrap active"><a href="#" class="title">Title 1</a>
                <ul class="sub-panel">
                    <li>Content 1</li>
                </ul>
            </li>

            <li class="wrap"><a href="#" class="title">Title 2</a>
                <ul class="sub-panel">
                    <li>Content 2</li>
                </ul>
            </li>

            <li class="wrap"><a href="#" class="title">Title 3</a>
                <ul class="sub-panel">
                    <li>Content 3</li>
                </ul>
            </li>

            <li class="wrap"><a href="#" class="title">Title 4</a>
                <ul class="sub-panel">
                    <li>Content 4</li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<script>
    var allBtns = document.querySelectorAll('.w3jar-accordion .panel .wrap > .title');
    var allEl = document.querySelectorAll('.w3jar-accordion .panel .wrap');

    Array.from(allBtns).forEach(function (el) {

        var parentEl = el.parentElement;
        el.onclick = function () {
            if (!parentEl.classList.contains('active')) {
                Array.from(allEl).forEach(function (el) {
                    if (el.classList.contains('active')) {
                        el.classList.remove('active');
                        parentEl.classList.add('active');
                    }
                });
            }
        };

    });
</script>
</body>

</html>
