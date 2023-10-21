<!DOCTYPE html>
<html>

<head>
    <title>CloStat</title>
    <link rel="stylesheet" href="style.css" />
    <script defer src="/res/icons/friconix.js"></script>
</head>

<body>
    <main>
        <div class="main">
            <form action="add.php" method="post" enctype="multipart/form-data">
                <div class="primary_color">
                    <label for="primary-color">Primary Color</label>
                    <input type="color" id="primary-color" name="primary-color" required>
                </div>
                <div class="secondary_color">
                    <label for="secondary-color">Secondary Color</label>
                    <input type="color" id="secondary-color" name="secondary-color" required>
                </div>
                <div class="image-upload">
                    <label for="image">Image</label>
                    <input type="file" id="image-input" name="image" accept="image/*" required onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                    <img src="" id="image" alt="Click here to change Image" onclick="document.getElementById('image-input').click()">
                </div>
                <div class="category">
                    <label for="category">Category</label>
                    <input type="hidden" id="category" name="category" value="casual" required>
                    <div class="button_divider">
                        <div onclick="setCategory('casual');" class="button_divider-button_active">
                            Casual
                        </div>
                        <div onclick="setCategory('sports');">
                            Sports
                        </div>
                        <div onclick="setCategory('event');">
                            Event
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="back" onclick="location.assign('/')">
            <i class="fi-xnslxl-chevron-solid"></i>
        </div>
        <div class="add" onclick="document.querySelector('form').submit();">
            <i class="fi-cwsuxl-plus-solid"></i>
        </div>
    </main>
    <script src="category.js"></script>
</body>

</html>