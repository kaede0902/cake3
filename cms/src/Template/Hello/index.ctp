<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?= $title ?>
    </title>
</head>
<body>
    <header class='row'>
        <h1>
            <?= $title ?>
        </h1>
    </header>
<div class="row">
    <pre>
        <?= 
            print_r($data);
        ?>
    </pre>
</div>

    <div class="row">
        <table>
            <?= $this->Form->create(
                null,[
                    'type'=>'post',
                    'url' => [
                        'controller'=>'Hello',
                        'action'=>'index'
                    ]
                ]
            )
            ?>
            <tr>
                <th>name</th>
                <td>
                    <?=
                        $this->Form->text('Form1.name')
                    ?>
                </td>
            </tr>
            <tr>
                <th>mail</th>
                <td>
                    <?=
                        $this->Form->text('Form1.mail')
                    ?>
                </td>
            </tr>
            <tr>
                <th>age</th>
                <td>
                    <?=
                        $this->Form->text('Form1.age')
                    ?>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <?=
                       $this->Form->submit('Send')
                    ?>
                    <?=
                       $this->Form->end()
                    ?>
                </td>
            </tr>
            </form>
        </table>
    </div>
</body>
</html>
