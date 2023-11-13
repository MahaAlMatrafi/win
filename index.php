<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include_once './parts/header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <img src="images/hh.png" alt="">
        <h1 class="display-4 fw-normal">أربح مع مهى</h1>
        <p class="lead fw-normal"> متبقي على فتح التسجيل</p>
        <h3 id="demo"></h3>
        <p class="lead fw-normal">للسحب على رحلة مجانية </p>
    </div>


    <div class="container">
        <h3>للدخول للسحب اتبع التالي</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
            <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
            <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك </li>
            <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
            <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="position-relative ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <h3 class="text-center"> الرجاء ادخال معلوماتك</h3>
                <div class="mb-3">
                    <label for="firstName" class="form-label">الاسم الاول</label>
                    <input type="text" name="firstName" class="form-control" id="firstName"
                        value="">
                    <div class="form-text error">
                        <?php echo $erroors['firstNameError'] ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label"> الاسم الاخير</label>
                    <input type="text" name="lastName" class="form-control" id="lastName"
                        value="">
                    <div class="form-text error">
                        <?php echo $erroors['lastNameError'] ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">البريد الالكتروني</label>
                    <input type="text" name="email" class="form-control" id="email" value="">
                    <div class="form-text error">
                        <?php echo $erroors['emailError'] ?>
                    </div>
                </div>
                
                <button type="submit" name="submit" class="btn btn-success">ارسال المعلومات
            </div>
            </form>
        </div>
    </div>



    <div class="loader-con"></div>
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
    <hr>
    <!-- Button trigger modal -->
    <div class=" col-6 mx-auto my-5 text-center">
        <button type="button" id="winner" class="btn btn-success" style="width:400px">
            اختيار الرابح
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal Label"> الرابح في المسابقة</h5>
                    <button type="button" id='win' class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php foreach ($users as $users): ?>
                        <h1 class=" disply-3 text-center modal-title" id="modal Label">
                            <?php echo htmlspecialchars($users['firstName']) . '<br>' . htmlspecialchars($users['lastName']) . '<br>' . htmlspecialchars($users['email']); ?>
                        </h1>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


    <div id="cards" class="row mb-5 pb-5">
        <div class="col-sm6">
            <div class="card my-2 light">
                <div class="card-body">
                    <h1>
                        <?php echo htmlspecialchars($users['firstName']) . '<br>' . htmlspecialchars($users['lastname']) . '<br>' . htmlspecialchars($users['email']); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    


    <?php include_once './parts/footer.php'; ?>