@extends('template')

@section('title')
    <?php
        include '../app/DTO/connect.php';
        $id = $_GET['id'];
        $company_id = $_GET['company_id'];
        $sql = "SELECT service_name FROM `services` WHERE `service_id`=$id";
        foreach ($db->query($sql) as $row) {
            $name = $row['service_name'];
        }
        echo $name;
    ?>
@endsection

@section('main_body')
    <div class="greet">
        <h1><?php echo $name; ?></h1>
    </div>

    <?php
        $sql = "SELECT * FROM `services` WHERE `company_id` = $company_id AND `service_id` = $id";
        foreach ($db->query($sql) as $row) {
            $price = $row['default_price'];
            echo "<img src='data://image/jpeg;base64,".base64_encode($row['photo'])."'>";
            echo "Цена: ".$price;
        }
    ?>    

    <form method="GET">
        ФИО: <input type="text" placeholder="ФИО">
        Телефон: <input type="text" placeholder="00000000000">
        email: <input type="text" placeholder="example@mail.ru">
        <input type="submit" name="order" value="Заказать">
    </form>
@endsection