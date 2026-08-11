<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio cá nhân - Đặng Thị Ngọc Anh</title>

    <style>

        /* ================= CÀI ĐẶT CHUNG ================= */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1050px;
            margin: auto;
        }


        /* ================= HEADER ================= */

        header {
            background: linear-gradient(135deg, #f8a9c4, #fbcbdc);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        header h1 {
            font-size: 42px;
            margin-bottom: 15px;
            text-shadow: 1px 2px 5px rgba(120, 40, 70, 0.2);
        }

        header p {
            font-size: 19px;
            color: white;
        }


        /* ================= MENU ================= */

        nav {
            background-color: white;
            padding: 18px 10px;

            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;

            position: sticky;
            top: 0;
            z-index: 1000;

            box-shadow: 0 3px 15px rgba(220, 100, 140, 0.15);
        }

        nav a {
            text-decoration: none;
            color: #9b4265;

            font-weight: bold;
            font-size: 16px;

            padding: 10px 22px;

            border: 2px solid #f4bfd0;
            border-radius: 25px;

            background-color: #fff;

            transition: all 0.3s ease;
        }

        /* Điểm nhấn khi rê chuột */

        nav a:hover {
            background-color: #e989aa;
            color: white;
            border-color: #e989aa;

            transform: translateY(-3px);

            box-shadow: 0 5px 12px rgba(220, 100, 140, 0.3);
        }


        /* ================= SECTION ================= */

        section {
            padding: 65px 0;
        }

        .title {
            text-align: center;
            margin-bottom: 35px;
        }

        .title h2 {
            color: #d85c88;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .title h2::after {
            content: "";
            display: block;

            width: 60px;
            height: 4px;

            background-color: #e989aa;

            margin: 10px auto;

            border-radius: 10px;
        }


        /* ================= GIỚI THIỆU ================= */

        .about {
            background-color: white;

            padding: 35px;

            border-radius: 15px;

            border-left: 5px solid #e989aa;

            box-shadow: 0 5px 20px rgba(220, 100, 140, 0.12);
        }

        .about p {
            margin-bottom: 12px;
        }

        .about strong {
            color: #d85c88;
        }


        /* ================= SỞ THÍCH ================= */

        .hobbies {
            margin-top: 15px;
        }

        .hobby {
    display: inline-block;
    background-color: #fde3ec;
    color: #b74b72;
    padding: 8px 17px;
    margin: 5px;
    border-radius: 20px;
    font-weight: bold;
}


        /* ================= KỸ NĂNG ================= */

        .skills {
            display: flex;

            flex-wrap: wrap;

            justify-content: center;

            gap: 18px;
        }

        .skill {
            background-color: white;

            color: #b74b72;

            padding: 16px 30px;

            border-radius: 12px;

            border: 2px solid #f4bfd0;

            font-weight: bold;

            box-shadow: 0 4px 12px rgba(220, 100, 140, 0.1);

            transition: all 0.3s ease;
        }

        .skill:hover {
            background-color: #e989aa;
            color: white;

            transform: translateY(-5px);

            box-shadow: 0 7px 18px rgba(220, 100, 140, 0.25);
        }


        /* ================= DỰ ÁN ================= */

        .projects {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

       .project {
    background-color: white;
    padding: 28px;
    border-radius: 15px;
    border-top: 5px solid #e989aa;
    box-shadow: 0 5px 18px rgba(220, 100, 140, 0.12);
}

        .project h3 {
            color: #d85c88;

            margin-bottom: 18px;

            font-size: 20px;
        }

        .project p {
            margin-bottom: 18px;
        }

        .project strong {
            color: #b74b72;
        }


        /* ================= CÔNG NGHỆ ================= */

        .tag {
            display: inline-block;

            background-color: #e989aa;

            color: white;

            padding: 6px 12px;

            margin: 5px 3px;

            border-radius: 15px;

            font-size: 13px;

            font-weight: bold;
        }


        /* ================= LIÊN HỆ ================= */

        .contact {
            background-color: white;

            padding: 35px;

            text-align: center;

            border-radius: 15px;

            border: 2px solid #f4bfd0;

            box-shadow: 0 5px 18px rgba(220, 100, 140, 0.12);
        }

        .contact p {
            margin: 12px;
        }

        .contact strong {
            color: #d85c88;
        }


        /* ================= FOOTER ================= */

        footer {
            background-color: #d85c88;

            color: white;

            text-align: center;

            padding: 25px;

            margin-top: 20px;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 800px) {

            .projects {
                grid-template-columns: 1fr;
            }

            header h1 {
                font-size: 30px;
            }

            nav {
                flex-wrap: wrap;
            }

            nav a {
                padding: 8px 15px;
                font-size: 14px;
            }

            .skill {
                padding: 12px 20px;
            }
        }

    </style>

</head>


<body>


<!-- ================= HEADER ================= -->

<header>

    <div class="container">

        <h1>Xin chào, mình là Đặng Thị Ngọc Anh</h1>

        <p>
            Chào mừng bạn đến với Portfolio cá nhân của mình!
        </p>

    </div>

</header>


<!-- ================= MENU ================= -->

<nav>

    <a href="#about">Giới thiệu</a>

    <a href="#skills">Kỹ năng</a>

    <a href="#projects">Dự án</a>

    <a href="#contact">Liên hệ</a>

</nav>


<!-- ================= GIỚI THIỆU ================= -->

<section id="about">

    <div class="container">

        <div class="title">

            <h2>Giới thiệu bản thân</h2>

        </div>


        <div class="about">

            <p>
                <strong>Họ và tên:</strong>
                Đặng Thị Ngọc Anh
            </p>

            <p>
                <strong>Quê quán:</strong>
                Hà Nội
            </p>

            <p>
                <strong>Trình độ học vấn:</strong>
                Sinh viên năm 3
            </p>

            <p>
                <strong>Ngành học:</strong>
                Toán - Công nghệ thông tin
            </p>

            <p>
                <strong>Trường:</strong>
                Đại học Thủ đô Hà Nội
            </p>

            <p>
                <strong>Định hướng:</strong>
                Lập trình Web và phát triển phần mềm
            </p>


            <br>


            <strong>Sở thích:</strong>


            <div class="hobbies">

                <span class="hobby">
                    Cầu lông
                </span>

                <span class="hobby">
                    Lập trình web
                </span>

                <span class="hobby">
                    Nghe nhạc
                </span>

                <span class="hobby">
                    Đọc sách
                </span>

                <span class="hobby">
                    Du lịch
                </span>

            </div>

        </div>

    </div>

</section>


<!-- ================= KỸ NĂNG ================= -->

<section id="skills">

    <div class="container">

        <div class="title">

            <h2>Kỹ năng</h2>

        </div>


        <div class="skills">

            <div class="skill">
                HTML
            </div>

            <div class="skill">
                CSS
            </div>

            <div class="skill">
                JavaScript
            </div>

            <div class="skill">
                PHP
            </div>

            <div class="skill">
                MySQL
            </div>

            <div class="skill">
                C++
            </div>

        </div>

    </div>

</section>


<!-- ================= DỰ ÁN ================= -->

<section id="projects">

    <div class="container">

        <div class="title">

            <h2>Các dự án đã thực hiện</h2>

        </div>


        <div class="projects">


            <!-- DỰ ÁN 1 -->

            <div class="project">

                <h3>
                    1. Portfolio cá nhân
                </h3>

                <strong>
                    Kỹ năng sử dụng:
                </strong>

                <div>

                    <span class="tag">
                        HTML
                    </span>

                    <span class="tag">
                        CSS
                    </span>

                    <span class="tag">
                        JavaScript
                    </span>

                    <span class="tag">
                        PHP
                    </span>

                </div>

            </div>


            <!-- DỰ ÁN 2 -->

            <div class="project">

                <h3>
                    2. Website quảng bá du lịch
                </h3>

                <strong>
                    Kỹ năng sử dụng:
                </strong>

                <div>

                    <span class="tag">
                        HTML
                    </span>

                    <span class="tag">
                        CSS
                    </span>

                    <span class="tag">
                        JavaScript
                    </span>

                    <span class="tag">
                        PHP
                    </span>

                    <span class="tag">
                        MySQL
                    </span>

                </div>

            </div>


            <!-- DỰ ÁN 3 -->

            <div class="project">

                <h3>
                    3. Hệ thống đặt lịch tư vấn/ hẹn gặp giảng viên
                </h3>

                <strong>
                    Kỹ năng sử dụng:
                </strong>

                <div>

                    <span class="tag">
                        HTML
                    </span>

                    <span class="tag">
                        CSS
                    </span>

                    <span class="tag">
                        JavaScript
                    </span>

                    <span class="tag">
                        PHP
                    </span>

                    <span class="tag">
                        MySQL
                    </span>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- ================= LIÊN HỆ ================= -->

<section id="contact">

    <div class="container">

        <div class="title">

            <h2>Liên hệ</h2>

        </div>


        <div class="contact">

            <p>

                <strong>Email:</strong>

                ngocanhhdang1112@gmail.com

            </p>


            <p>

                <strong>GitHub:</strong>

                github.com/nqocanhh

            </p>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © 2026 Ngọc Anh - Personal Portfolio
    </p>

</footer>


</body>

</html>
