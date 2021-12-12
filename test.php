<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
//Write a JavaScript function that generates all combinations of a string.
function substrings(str1) {
   var array1 = [];
   for (var x = 0, y = 1; x < str1.length; x++, y++) {
      array1[x] = str1.substring(x, y);
   }
   var combi = [];
   var temp = "";
   var slent = Math.pow(2, array1.length);

   for (var i = 0; i < slent; i++) {
      temp = "";
      for (var j = 0; j < array1.length; j++) {
         if ((i & Math.pow(2, j))) {
            temp += array1[j];
         }
      }
      if (temp !== "") {
         combi.push(temp);
      }
   }
   document.write(combi.join("\n"));
}

substrings("1234567890abcdifghijklmnopqrstuvwxyz");
</script>

</body>
</html>
