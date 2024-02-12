<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
  margin: 0 auto;
  
}

:root {
  --main-value: 200px;
}

html {
  background-color: grey;
}

.container {
  margin: 20px;
}


.main-sqare {
  position: relative;
  width: var(--main-value);
  height: var(--main-value);
  background: linear-gradient(135deg, rgba(150,100,188,1) 0%, rgba(104,70,171,1) 50%, rgba(57,39,154,1) 100%);
}

.square-cover {
  position: absolute;
  width: calc(var(--main-value) - 5px);
  height: calc(var(--main-value) - 5px);
  background-color: grey;
  left: 2.5%;
}

.bottom-main-sqare {
  position: relative;
  width: var(--main-value);
  height: var(--main-value);
  background: linear-gradient(45deg, rgba(150,100,188,1) 0%, rgba(104,70,171,1) 50%, rgba(57,39,154,1) 100%);
}

.bottom-square-cover {
  position: absolute;
  width: calc(var(--main-value) - 5px);
  height: var(--main-value);
  background-color: grey;
  left: 2.5%;
}

    </style>
</head>
<body>
<div class="container">
    <div class="main-sqare">
      <div class="square-cover"></div>
    </div>
    <div class="bottom-main-sqare">
      <div class="bottom-square-cover"></div>
    </div>
</div>
</body>
</html>