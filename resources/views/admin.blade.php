<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

body, html {
  height: 100%;
}


.search-bar{
  width: 100%;
  max-width: 700px;
  display: flex;
  align-items: center;
  border-radius: 60px;
  padding: 10px 20px;
}

.search-bar input {
  background: transparent;
  flex: 1;
  border: 0; 
  outline: none;
  padding: 24px 20px;
  font-size: 10px;
  color: #000000;
}
::placeholder{
  color: #000000;
}

.search-bar button img{
  width: 25px;
}
.search-bar button{
  border: 0;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  background: #d9d9d9;
  cursor: pointer;
}

.admin-panel {
  background-color: #000000;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.admin-panel .overlap-wrapper {
  background-color: #000000;
  overflow: hidden;
  width: 1440px;
  height: 1024px;
}

.admin-panel .overlap {
  position: relative;
  width: 2094px;
  height: 2112px;
  top: -534px;
  left: -382px;
}

.admin-panel .overlap-group {
  position: absolute;
  width: 2094px;
  height: 2112px;
  top: 0;
  left: 0;
}


.admin-panel .div {
  top: 842px;
  left: 0;
  position: absolute;
  width: 1276px;
  height: 1270px;
  border-radius: 638px/635px;
  background: radial-gradient(50% 50% at 50% 50%, rgba(9.59, 18.05, 71.19, 0.41) 0%, rgba(9.59, 18.05, 71.19, 0) 100%);
}

.admin-panel .rectangle {
  height: 878px;
  top: 823px;
  position: absolute;
  width: 1152px;
  left: 526px;
  background-color: #d9d9d9;
  border-radius: 25px;
}

.admin-panel .rectangle-2 {
  height: 65px;
  top: 729px;
  position: absolute;
  width: 1152px;
  left: 526px;
  background-color: #d9d9d9;
  border-radius: 25px;
}

.admin-panel .text-wrapper {
  position: absolute;
  top: 746px;
  left: 573px;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  color: #000000;
  font-size: 20px;
  text-align: center;
  letter-spacing: 0.2px;
  line-height: normal;
}

.admin-panel .frame {
  width: 249px;
  height: 27px;
  align-items: center;
  gap: 160.84px;
  padding: 3.88px 8.55px 3.88px 15.54px;
  top: 747px;
  left: 1332px;
  border-radius: 19.42px;
  border: 0.78px solid;
  border-color: #000000;
  display: flex;
  position: absolute;
}

.admin-panel .text-wrapper-2 {
  position: relative;
  display: flex; 
  align-items: center; 
  width: 250px; 
}

.admin-panel .search-bar {
  width: 100%; 
  padding-left: 70px;
}

.admin-panel .search {
  margin-left: 10px; 
}

.admin-panel .funnel {
  position: absolute;
  width: 28px;
  height: 28px;
  top: 746px;
  left: 1604px;
}

.admin-panel .frame-2 {
  flex-direction: column;
  width: 1152px;
  height: 826px;
  align-items: flex-start;
  top: 857px;
  left: 526px;
  display: flex;
  position: absolute;
}

.admin-panel .group {
  position: relative;
  width: 1152px;
  height: 59px;
  background-color: #d9d9d9;
}

.admin-panel .div-wrapper {
  position: relative;
  height: 59px;
  background-color: #d9d9d9;
}

.admin-panel .text-wrapper-3 {
  position: absolute;
  top: 17px;
  left: 47px;
  font-family: 'Poppins', sans-serif;
  font-weight: 400;
  color: #000000;
  font-size: 16px;
  letter-spacing: 0;
  line-height: normal;
}

.admin-panel .text-wrapper-4 {
  position: absolute;
  width: 247px;
  top: 634px;
  left: 506px;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  color: #22539f;
  font-size: 36px;
  text-align: center;
  letter-spacing: 0.72px;
  line-height: normal;
}

    </style> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <div class="admin-panel">
        <div class="overlap-wrapper">
            <div class="overlap">
                <div class="overlap-group">
                    <div class="div"></div>
                    <div class="rectangle"></div>
                    <div class="container">

                    </div>
                    <div class="rectangle-2"></div>
                    <div class="text-wrapper">All Team</div>
                    <div class="frame">
                      <form action="" class="search-bar">
                        <input type="text" placeholder="Search" name="q">
                        <button type="submit"><img src="image/search.png" alt="Search Icon"></button>
                    </form>
                        <div class="text-wrapper-2">
                        </div>
                    </div>
                    <img class="funnel" src="image/fummel.png" alt="Funnel Icon" />
                    <div class="frame-2">
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                        <div class="group">
                            <div class="div-wrapper"><div class="text-wrapper-3">Nama Team</div></div>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-4">Participant</div>
            </div>
        </div>
    </div>
</body>
</html>
