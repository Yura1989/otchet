<html>
<head>
    <title>Function</title>
</head>
<body>
<p><a href="../index.php">Main</a></p>
<p>Function</p>
<script>
    function hypotenuse (x, y){
        return Math.sqrt(x * x + y * y);
    }
    var answer = hypotenuse(1, 1);
    document.write(answer);

    function factorial(x)
    {
        if (x < 0) throw new Error ("Error motherfucker");
        for (var f = 1; x > 1; f *=x, x--);
        return f;
    }
    //var answerFac = factorial(-4);
    //document.write("<br />" + answerFac);

    try {
        var n = Number(prompt("Введите положительное число", ""));
        var f = factorial(n);
        alert(n + "! = " + f);
    }
    catch (ex){
        alert(ex);
    }

    function f(o)
    {
        if (o === undefined) debugger;
        document.write("hello world");
    }
    f(6);
</script>
</body>
</html>