<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Binary Tree CSS</title>
<style>
    /* Styles for the tree */
    .tree {
        display: flex;
        justify-content: center;
    }

    .node {
        width: 50px;
        height: 50px;
        background-color: lightblue;
        border-radius: 50%;
        text-align: center;
        line-height: 50px;
        position: relative;
        margin: 0 20px;
    }

    .node::before {
        content: '';
        position: absolute;
        top: -30px;
        left: 50%;
        width: 0;
        height: 30px;
        border-left: 2px solid black;
    }

    .node.left::before {
        transform: translateX(-50%);
    }

    .node.right::before {
        transform: translateX(-50%) rotate(180deg);
    }

    /* Styles for tree connectors */
    .connector {
        position: absolute;
        border-left: 2px solid black;
        height: 50px;
    }

    .connector.left {
        left: 0;
        top: 0;
        transform: translateX(25px);
    }

    .connector.right {
        right: 0;
        top: 0;
        transform: translateX(-25px);
    }
</style>
</head>
<body>
    <div class="tree">
        <div class="node">
            1
            <div class="connector left"></div>
            <div class="connector right"></div>
        </div>
        <div class="node left">
            2
            <div class="connector left"></div>
            <div class="connector right"></div>
        </div>
        <div class="node right">
            3
            <div class="connector left"></div>
            <div class="connector right"></div>
        </div>
        <div class="node left">
            4
            <div class="connector left"></div>
            <div class="connector right"></div>
        </div>
        <div class="node right">
            5
            <div class="connector left"></div>
            <div class="connector right"></div>
        </div>
    </div>
</body>
</html>
