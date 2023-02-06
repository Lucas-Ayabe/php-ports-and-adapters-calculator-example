<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <?= isset($result) ? "<h1>Result: $result</h1>" : "" ?>

    <form method="post">
        <label>
            <span>First value</span>
            <input type="number" name="first_value">
        </label>

        <label>
            <span>Second value</span>
            <input type="number" name="second_value">
        </label>

        <label>
            <span>Operation</span>
            <select name="operation">
                <option selected value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </label>

        <button>Calculate</button>
    </form>
</body>

</html>