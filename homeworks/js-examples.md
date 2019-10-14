# JAVASCRIPT EXAMPLES

## Hypotenuse Calculation

```html
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h2>JavaScript Hypotenuse Calculation</h2>
    <input placeholder="Enter 1st Edge" type="text" id="txtEdge1">
    <input placeholder="Enter 2nd Edge" type="text" id="txtEdge2">
    <button id="btn">CALCULATE</button>
    <div id="result"></div>

    <script>
        function Calculate() {
            var k1 = Number(document.getElementById("txtEdge1").value);
            var k2 = Number(document.getElementById("txtEdge2").value);
            var hypotenuse = Math.sqrt((k1 * k1) + (k2 * k2));
            document.getElementById("result").innerHTML = "Hypotenuse : " + hypotenuse;
        }

        var calculateBtn = document.getElementById("btn");
        calculateBtn.onclick = Calculate;

    </script>

</body>

</html>

``` 
<br/>
Here is the result <br/>

![result](/images/asdg.png) <br/>

## Calculate Area and Circumference of Rectangle

```html
<input type="text" id="short" placeholder="Enter short edge">
<input type="text" id="tall" placeholder="Enter tall edge">
<input type="button" value="Calculate" id="calculate">
<script>
    
    function calculate() {
        var se = document.getElementById("short").value;
        var te = document.getElementById("tall").value;

        se = Number(se);
        te = Number(te);

        var area = se * te;
        var circle = (se + te) * 2;
        alert("area of ​​rectangle:" + area + " \n perimeter of the rectangle:" + circle);


    }
    var calculateBtn = document.getElementById("calculate");

    calculateBtn.onclick = calculate;
</script>
``` 
<br/>

Result: <br/>

![result](images/rectangle.png) 
<br/>
<br/>
## Find Day
```html
<!DOCTYPE html>
<html>

<body>

    <p id="try"></p>

    <script>
        var day;
        switch (new Date().getDay()) {
            case 0:
                day = "Sunday";
                break;
            case 1:
                day = "Monday";
                break;
            case 2:
                day = "Tuesday";
                break;
            case 3:
                day = "Wednesday";
                break;
            case 4:
                day = "Thursday";
                break;
            case 5:
                day = "Friday";
                break;
            case 6:
                day = "Saturday";
                break;
        }
        document.getElementById("try").innerHTML = "Today is " + day;
    </script>

</body>

</html>
``` 
Result: <br/>
![result](images/day.png) 

## JavaScript Multiplication Table
``` html
<!doctype html>
<html>

<head>
    <title>Multiplication Table</title>
    <script type="text/javascript">
        var rows = prompt("How many rows for your multiplication table?");
        var cols = prompt("How many columns for your multiplication table?");
        if (rows == "" || rows == null)
            rows = 10;
        if (cols == "" || cols == null)
            cols = 10;
        createTable(rows, cols);

        function createTable(rows, cols) {
            var j = 1;
            var output = "<table border='1' width='500' cellspacing='0'cellpadding='5'>";
            for (i = 1; i <= rows; i++) {
                output = output + "<tr>";
                while (j <= cols) {
                    output = output + "<td>" + i * j + "</td>";
                    j = j + 1;
                }
                output = output + "</tr>";
                j = 1;
            }
            output = output + "</table>";
            document.write(output);
        }
    </script>
</head>

<body>
</body>

</html>
``` 

Result: <br/>
![result](images/table1.png) <br/>
![result](images/table2.png) <br/>
![result](images/table.png) <br/>
<br/>
You can learn more about JavaScript from W3Schools, FreeCodeCamp or another sites. <br/>
Thank you for reading. See you next blog post :)