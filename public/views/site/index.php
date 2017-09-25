<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>List Members</h2>
                <? if ($members) { ?>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                    <? for ($i = 0; $i < count($members); $i++) { ?>
                            <tr>
                                <td><? echo $members[$i]['id'];?></td>
                                <td><? echo $members[$i]['firstname'];?></td>
                                <td><? echo $members[$i]['lastname'];?></td>
                            </tr>

                    <? } ?>
                    </table>
                <?
                } else {
                    echo 'kooo';
                }
                ?>


            </div>

        </div>

    </div>
</div>
