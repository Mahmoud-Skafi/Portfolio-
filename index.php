<?php
include('./admin/config/dbcon.php');
include('./admin/config/permissions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SKAFIPS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
</head>


<body id="my-scrollbar">
  <!-- cursor-effect -->
  <span class="cursor">
    <span class="cursor-move-inner">
      <span class="cursor-inner"></span>
    </span>
    <span class="cursor-move-outer">
      <span class="cursor-outer"></span>
    </span>
  </span>

  <!-- end -->
  <div class="sk-main-page" style="height: 100vh;">
    <nav>
      <div class="sk-contianer">
        <div class="row sk-flex-col sk-jcc sk-aic">
          <div class="sk-nav-logo">
            <svg width="189" height="53" viewBox="0 0 189 53" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.2503 42.5078H34.7308V52H0.910461V0.8125H13.2503V42.5078Z" fill="white" />
              <path d="M83.9116 27.4609C83.9116 32.4531 82.9858 36.8711 81.1342 40.7148C79.2827 44.5586 76.6459 47.5234 73.2241 49.6094C69.8256 51.6719 65.9467 52.7031 61.5873 52.7031C57.228 52.7031 53.3608 51.707 49.9858 49.7148C46.6108 47.6992 43.9741 44.8281 42.0756 41.1016C40.2006 37.375 39.2162 33.0977 39.1225 28.2695V25.3867C39.1225 20.3711 40.0366 15.9531 41.8647 12.1328C43.7162 8.28906 46.353 5.32422 49.7748 3.23828C53.2201 1.15234 57.1342 0.109375 61.517 0.109375C65.853 0.109375 69.7202 1.14062 73.1186 3.20312C76.517 5.26562 79.1537 8.20703 81.0287 12.0273C82.9272 15.8242 83.8881 20.1836 83.9116 25.1055V27.4609ZM71.3608 25.3164C71.3608 20.2305 70.5053 16.375 68.7944 13.75C67.1069 11.1016 64.6811 9.77734 61.517 9.77734C55.3295 9.77734 52.06 14.418 51.7084 23.6992L51.6733 27.4609C51.6733 32.4766 52.5053 36.332 54.1694 39.0273C55.8334 41.7227 58.3061 43.0703 61.5873 43.0703C64.7045 43.0703 67.1069 41.7461 68.7944 39.0977C70.4819 36.4492 71.3373 32.6406 71.3608 27.6719V25.3164Z" fill="white" />
              <path d="M135.061 45.6719C133.163 47.7812 130.385 49.4805 126.729 50.7695C123.073 52.0586 119.065 52.7031 114.706 52.7031C108.002 52.7031 102.647 50.6523 98.6392 46.5508C94.6314 42.4492 92.4869 36.7422 92.2056 29.4297L92.1705 25C92.1705 19.9609 93.0611 15.5664 94.8423 11.8164C96.6236 8.04297 99.1666 5.14844 102.471 3.13281C105.799 1.09375 109.643 0.0742188 114.002 0.0742188C120.377 0.0742188 125.323 1.53906 128.838 4.46875C132.377 7.375 134.44 11.7227 135.026 17.5117H123.143C122.721 14.6523 121.807 12.6133 120.401 11.3945C118.995 10.1758 117.002 9.56641 114.424 9.56641C111.331 9.56641 108.94 10.8789 107.252 13.5039C105.565 16.1289 104.71 19.8789 104.686 24.7539V27.8477C104.686 32.957 105.553 36.8008 107.288 39.3789C109.045 41.9336 111.799 43.2109 115.549 43.2109C118.76 43.2109 121.151 42.4961 122.721 41.0664V33.1211H114.143V24.6484H135.061V45.6719Z" fill="white" />
              <path d="M188.461 27.4609C188.461 32.4531 187.535 36.8711 185.683 40.7148C183.832 44.5586 181.195 47.5234 177.773 49.6094C174.375 51.6719 170.496 52.7031 166.136 52.7031C161.777 52.7031 157.91 51.707 154.535 49.7148C151.16 47.6992 148.523 44.8281 146.625 41.1016C144.75 37.375 143.765 33.0977 143.672 28.2695V25.3867C143.672 20.3711 144.586 15.9531 146.414 12.1328C148.265 8.28906 150.902 5.32422 154.324 3.23828C157.769 1.15234 161.683 0.109375 166.066 0.109375C170.402 0.109375 174.269 1.14062 177.668 3.20312C181.066 5.26562 183.703 8.20703 185.578 12.0273C187.476 15.8242 188.437 20.1836 188.461 25.1055V27.4609ZM175.91 25.3164C175.91 20.2305 175.054 16.375 173.343 13.75C171.656 11.1016 169.23 9.77734 166.066 9.77734C159.879 9.77734 156.609 14.418 156.258 23.6992L156.222 27.4609C156.222 32.4766 157.054 36.332 158.718 39.0273C160.383 41.7227 162.855 43.0703 166.136 43.0703C169.254 43.0703 171.656 41.7461 173.343 39.0977C175.031 36.4492 175.886 32.6406 175.91 27.6719V25.3164Z" fill="white" />
            </svg>
            <!-- <img src="" alt="" /> -->
          </div>
          <div class="sk-nav-elements">
            <ul class="sk-flex">
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About me</a>
              </li>
              <li>
                <a href="#">Wrok</a>
              </li>
              <li>
                <a href="#">Git in touch</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <section class="sk-contianer" style="height: 55vh;">
      <div>
        <div class="">
          <div class="sk-section-contianer sk-jcb">
            <div class="sk-main-text">
              <h1>
                HI my name <br />mahmoud sakfi a
                <span>
                  <a href="" class="typewrite" data-period="1000" data-type='[ "Designer.", "...", "UI/UX. ", "..." ]'>
                    <span class="wrap"></span>
                  </a>
                </span>
              </h1>
              <br />
              <h1></h1>
              <div class="sk-but padding-left-0">
                <a href="">about me</a>
              </div>
            </div>
            <div class="sk-anmation-images margin-top-60">
              <div class="sk-image-1">
                <img src="./images/index2.png" alt="" />
              </div>
              <div class="sk-image-2">
                <img src="./images/index3.png" alt="" />
              </div>
              <div class="sk-image-3">
                <img src="./images/index4.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="sk-contianer">
      <div class="sk-divider">
        <svg class="sk-svg" width="24" height="54" viewBox="0 0 24 54" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="-0.5" y="0.5" width="23.0001" height="51.174" rx="11.5" transform="matrix(-1 0 0 1 23 0.912964)" stroke="white" />
          <circle r="9.39132" transform="matrix(-1 0 0 1 12 40.5652)" fill="white" class="sk-circle" />
        </svg>
      </div>
    </div>
  </div>

  <!-- section-2 -->
  <div class="sk-header sk-jcc" style="overflow: hidden;">
    <a>{</a>
    <a>W</a>
    <a>o</a>
    <a>r</a>
    <a>k</a>
    <a>}</a>
  </div>
  <section class="sk-section-2 sk-contianer margin-top-150">

    <div class="sk-bechance-logo margin-bottom-60">
      <a href="" class="sk-behance-text" style="font-size: 2.5rem;">Bē</a>
    </div>
    <div class="" style="position: relative;">
      <div class="sk-card-container">
        <?php
        $sql = $conDb->doSelectQuery($conn, 'SELECT * FROM tblbehance WHERE 1');
        if ($sql['status'] == 1) {
          foreach ($sql['data'] as $row) {
        ?>
            <div class="sk-card-behance-container">
              <div class="sk-card">
                <div class="sk-card-image">
                  <img src="./js/<?php echo $row['imgeurl'] ?>" alt="" />
                </div>
              </div>
              <div class="sk-card-behance-detiles">
                <h1><?php echo $row['title'] ?></h1>
                <div class="sk-flex-row" style="color: #000;">
                  <i class="fas fa-thumbs-up" style="margin-right:  5px;"></i>
                  <p><?php echo $row['likes'] ?></p>
                </div>
                <div class="sk-flex-row sk-aic" style="color: #000; margin-right:  5px;">
                  <i class="fas fa-eye" style="margin-right:  5px;"></i>
                  <p><?php echo $row['views'] ?></p>
                </div>

              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
      <div class=" sk-behance-but" style="">
        <div class="sk-but">
          <a style="width: 220px;" href="">load more 👀</a>
        </div>
        <div class="sk-effect">
          <!-- <img src="../images/effect.png" style="z-index: -1;" alt="" /> -->
        </div>
      </div>
    </div>
  </section>
  <!-- end -->
  <!-- section-3 -->
  <section>
    <div class="sk-contianer">
      <div class="sk-github-logo sk-jcc">
        <a href="">
          <svg class="github" width="80px" height="80px" viewBox="0 0 138 138" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
              <path d="M69 2.875C30.8775 2.875 0 33.235 0 70.679C0 100.642 19.7685 126.052 47.1787 135.01C50.6287 135.648 51.8937 133.55 51.8937 131.75C51.8937 130.14 51.8363 125.873 51.8075 120.221C32.614 124.309 28.566 111.125 28.566 111.125C25.4265 103.299 20.8897 101.206 20.8897 101.206C14.6395 97.0025 21.3727 97.0888 21.3727 97.0888C28.3015 97.5603 31.9412 104.075 31.9412 104.075C38.0938 114.442 48.093 111.447 52.0375 109.716C52.6585 105.329 54.4353 102.344 56.4075 100.648C41.0838 98.9518 24.978 93.1213 24.978 67.1428C24.978 59.7425 27.6518 53.6935 32.0793 48.9498C31.303 47.2363 28.9743 40.342 32.683 31.004C32.683 31.004 38.4618 29.187 51.658 37.9558C57.178 36.4493 63.043 35.7018 68.908 35.6673C74.773 35.7018 80.638 36.4493 86.158 37.9558C99.268 29.187 105.047 31.004 105.047 31.004C108.755 40.342 106.427 47.2363 105.737 48.9498C110.135 53.6935 112.809 59.7425 112.809 67.1428C112.809 93.1903 96.6805 98.923 81.328 100.591C83.743 102.626 85.9855 106.783 85.9855 113.137C85.9855 122.211 85.8993 129.502 85.8993 131.704C85.8993 133.481 87.1068 135.602 90.643 134.924C118.249 126.023 138 100.596 138 70.679C138 33.235 107.105 2.875 69 2.875Z" />
            </g>
            <defs>
              <clipPath id="clip0">
                <rect width="138" height="138" />
              </clipPath>
            </defs>
          </svg>
        </a>
      </div>
      <div class="sk-card-container-github">
        <?php
        $sql = $conDb->doSelectQuery($conn, "SELECT * FROM tblgithub WHERE 1");
        foreach ($sql['data'] as $row) {
          if ($row['repo_private'] != 1) {
        ?>

            <div class="sk-github-card-container">
              <div class="sk-github-header">
                <h1><?php echo $row['reop_name'] ?></h1>
                <?php if ($row['repo_fork'] != 1) {
                ?>
                  <i class="fas fa-book"></i>
                <?php
                } else {
                ?>
                  <i class="fas fa-code-branch"></i>
                <?php
                }
                ?>
              </div>
              <div class="sk-github-readme">
                <p>
                  <?php echo $row['repo_description'] ?>
                </p>

              </div>
              <div class="sk-github-icons">
                <div class="sk-github-icon">
                  <i class="fas fa-circle" style="color:<?php echo $row['repo_color'] ?> ;"></i>
                  <p> <?php echo $row['repo_language'] ?></p>
                </div>
                <div class="sk-github-icon">
                  <i class="far fa-star"></i>
                  <p><?php echo $row['reop_stargazers_count'] ?></p>
                </div>
                <div class="sk-github-icon">
                  <i class="fas fa-code-branch"></i>
                  <p><?php echo $row['repo_fork_count'] ?></p>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        <?php
        }
        ?>


      </div>
      <div class="sk-jcc" style="margin: 100px 0px;">
        <div class="sk-but">
          <a style="width: 220px;" href="">load more 👀</a>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="height-100vh">
    <div class="sk-contianer">
      <div class="sk-conntact-header sk-jcc sk-flex-col sk-aic">
        <div class="sk-conntact-logo">
          <svg width="189" height="53" viewBox="0 0 189 53" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.2503 42.5078H34.7308V52H0.910461V0.8125H13.2503V42.5078Z" fill="white" />
            <path d="M83.9116 27.4609C83.9116 32.4531 82.9858 36.8711 81.1342 40.7148C79.2827 44.5586 76.6459 47.5234 73.2241 49.6094C69.8256 51.6719 65.9467 52.7031 61.5873 52.7031C57.228 52.7031 53.3608 51.707 49.9858 49.7148C46.6108 47.6992 43.9741 44.8281 42.0756 41.1016C40.2006 37.375 39.2162 33.0977 39.1225 28.2695V25.3867C39.1225 20.3711 40.0366 15.9531 41.8647 12.1328C43.7162 8.28906 46.353 5.32422 49.7748 3.23828C53.2201 1.15234 57.1342 0.109375 61.517 0.109375C65.853 0.109375 69.7202 1.14062 73.1186 3.20312C76.517 5.26562 79.1537 8.20703 81.0287 12.0273C82.9272 15.8242 83.8881 20.1836 83.9116 25.1055V27.4609ZM71.3608 25.3164C71.3608 20.2305 70.5053 16.375 68.7944 13.75C67.1069 11.1016 64.6811 9.77734 61.517 9.77734C55.3295 9.77734 52.06 14.418 51.7084 23.6992L51.6733 27.4609C51.6733 32.4766 52.5053 36.332 54.1694 39.0273C55.8334 41.7227 58.3061 43.0703 61.5873 43.0703C64.7045 43.0703 67.1069 41.7461 68.7944 39.0977C70.4819 36.4492 71.3373 32.6406 71.3608 27.6719V25.3164Z" fill="white" />
            <path d="M135.061 45.6719C133.163 47.7812 130.385 49.4805 126.729 50.7695C123.073 52.0586 119.065 52.7031 114.706 52.7031C108.002 52.7031 102.647 50.6523 98.6392 46.5508C94.6314 42.4492 92.4869 36.7422 92.2056 29.4297L92.1705 25C92.1705 19.9609 93.0611 15.5664 94.8423 11.8164C96.6236 8.04297 99.1666 5.14844 102.471 3.13281C105.799 1.09375 109.643 0.0742188 114.002 0.0742188C120.377 0.0742188 125.323 1.53906 128.838 4.46875C132.377 7.375 134.44 11.7227 135.026 17.5117H123.143C122.721 14.6523 121.807 12.6133 120.401 11.3945C118.995 10.1758 117.002 9.56641 114.424 9.56641C111.331 9.56641 108.94 10.8789 107.252 13.5039C105.565 16.1289 104.71 19.8789 104.686 24.7539V27.8477C104.686 32.957 105.553 36.8008 107.288 39.3789C109.045 41.9336 111.799 43.2109 115.549 43.2109C118.76 43.2109 121.151 42.4961 122.721 41.0664V33.1211H114.143V24.6484H135.061V45.6719Z" fill="white" />
            <path d="M188.461 27.4609C188.461 32.4531 187.535 36.8711 185.683 40.7148C183.832 44.5586 181.195 47.5234 177.773 49.6094C174.375 51.6719 170.496 52.7031 166.136 52.7031C161.777 52.7031 157.91 51.707 154.535 49.7148C151.16 47.6992 148.523 44.8281 146.625 41.1016C144.75 37.375 143.765 33.0977 143.672 28.2695V25.3867C143.672 20.3711 144.586 15.9531 146.414 12.1328C148.265 8.28906 150.902 5.32422 154.324 3.23828C157.769 1.15234 161.683 0.109375 166.066 0.109375C170.402 0.109375 174.269 1.14062 177.668 3.20312C181.066 5.26562 183.703 8.20703 185.578 12.0273C187.476 15.8242 188.437 20.1836 188.461 25.1055V27.4609ZM175.91 25.3164C175.91 20.2305 175.054 16.375 173.343 13.75C171.656 11.1016 169.23 9.77734 166.066 9.77734C159.879 9.77734 156.609 14.418 156.258 23.6992L156.222 27.4609C156.222 32.4766 157.054 36.332 158.718 39.0273C160.383 41.7227 162.855 43.0703 166.136 43.0703C169.254 43.0703 171.656 41.7461 173.343 39.0977C175.031 36.4492 175.886 32.6406 175.91 27.6719V25.3164Z" fill="white" />
          </svg>
        </div>
        <div class="sk-conntact-text margin-top-50">

          <p>contact with us bro</p>
        </div>
      </div>
      <div class="sk-form-contianer sk-jcc sk-flex-col sk-aic margin-top-60">
        <br>
        <br>
        <form>
          <div class="sk-flex-row ">
            <div class="group margin-left-right-20">
              <input type="text" required style="width:200px" placeholder="👨‍💻">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>First Name</label>
            </div>

            <div class="group margin-left-right-20">
              <input type="text" required style="width:200px" placeholder="👨‍👩‍👧‍👦">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>fmaily name</label>
            </div>
          </div>

          <!-- <br> -->
          <div class="sk-flex-col ">
            <div class="group margin-left-right-20">
              <input class="sk-test" type="email" required style="width:460px" placeholder="📧">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Email </label>
            </div>
            <div class="group margin-left-right-20">
              <input type="text" required style="width:460px;" placeholder="📝">
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>subject</label>
            </div>
          </div>
          <div class="sk-jcc" style="margin: 10px 0px;">
            <div class="sk-but">
              <a href="">Send ❤️ </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>

  <section>
    <footer>
      <div class="sk-contianer sk-flex-row sk-jcc">
        <div class="sk-footer-header">
          <div class="sk-footer-logo">
            <svg width="189" height="53" viewBox="0 0 189 53" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.2503 42.5078H34.7308V52H0.910461V0.8125H13.2503V42.5078Z" fill="white" />
              <path d="M83.9116 27.4609C83.9116 32.4531 82.9858 36.8711 81.1342 40.7148C79.2827 44.5586 76.6459 47.5234 73.2241 49.6094C69.8256 51.6719 65.9467 52.7031 61.5873 52.7031C57.228 52.7031 53.3608 51.707 49.9858 49.7148C46.6108 47.6992 43.9741 44.8281 42.0756 41.1016C40.2006 37.375 39.2162 33.0977 39.1225 28.2695V25.3867C39.1225 20.3711 40.0366 15.9531 41.8647 12.1328C43.7162 8.28906 46.353 5.32422 49.7748 3.23828C53.2201 1.15234 57.1342 0.109375 61.517 0.109375C65.853 0.109375 69.7202 1.14062 73.1186 3.20312C76.517 5.26562 79.1537 8.20703 81.0287 12.0273C82.9272 15.8242 83.8881 20.1836 83.9116 25.1055V27.4609ZM71.3608 25.3164C71.3608 20.2305 70.5053 16.375 68.7944 13.75C67.1069 11.1016 64.6811 9.77734 61.517 9.77734C55.3295 9.77734 52.06 14.418 51.7084 23.6992L51.6733 27.4609C51.6733 32.4766 52.5053 36.332 54.1694 39.0273C55.8334 41.7227 58.3061 43.0703 61.5873 43.0703C64.7045 43.0703 67.1069 41.7461 68.7944 39.0977C70.4819 36.4492 71.3373 32.6406 71.3608 27.6719V25.3164Z" fill="white" />
              <path d="M135.061 45.6719C133.163 47.7812 130.385 49.4805 126.729 50.7695C123.073 52.0586 119.065 52.7031 114.706 52.7031C108.002 52.7031 102.647 50.6523 98.6392 46.5508C94.6314 42.4492 92.4869 36.7422 92.2056 29.4297L92.1705 25C92.1705 19.9609 93.0611 15.5664 94.8423 11.8164C96.6236 8.04297 99.1666 5.14844 102.471 3.13281C105.799 1.09375 109.643 0.0742188 114.002 0.0742188C120.377 0.0742188 125.323 1.53906 128.838 4.46875C132.377 7.375 134.44 11.7227 135.026 17.5117H123.143C122.721 14.6523 121.807 12.6133 120.401 11.3945C118.995 10.1758 117.002 9.56641 114.424 9.56641C111.331 9.56641 108.94 10.8789 107.252 13.5039C105.565 16.1289 104.71 19.8789 104.686 24.7539V27.8477C104.686 32.957 105.553 36.8008 107.288 39.3789C109.045 41.9336 111.799 43.2109 115.549 43.2109C118.76 43.2109 121.151 42.4961 122.721 41.0664V33.1211H114.143V24.6484H135.061V45.6719Z" fill="white" />
              <path d="M188.461 27.4609C188.461 32.4531 187.535 36.8711 185.683 40.7148C183.832 44.5586 181.195 47.5234 177.773 49.6094C174.375 51.6719 170.496 52.7031 166.136 52.7031C161.777 52.7031 157.91 51.707 154.535 49.7148C151.16 47.6992 148.523 44.8281 146.625 41.1016C144.75 37.375 143.765 33.0977 143.672 28.2695V25.3867C143.672 20.3711 144.586 15.9531 146.414 12.1328C148.265 8.28906 150.902 5.32422 154.324 3.23828C157.769 1.15234 161.683 0.109375 166.066 0.109375C170.402 0.109375 174.269 1.14062 177.668 3.20312C181.066 5.26562 183.703 8.20703 185.578 12.0273C187.476 15.8242 188.437 20.1836 188.461 25.1055V27.4609ZM175.91 25.3164C175.91 20.2305 175.054 16.375 173.343 13.75C171.656 11.1016 169.23 9.77734 166.066 9.77734C159.879 9.77734 156.609 14.418 156.258 23.6992L156.222 27.4609C156.222 32.4766 157.054 36.332 158.718 39.0273C160.383 41.7227 162.855 43.0703 166.136 43.0703C169.254 43.0703 171.656 41.7461 173.343 39.0977C175.031 36.4492 175.886 32.6406 175.91 27.6719V25.3164Z" fill="white" />
            </svg>
          </div>
          <div class="sk-footer-text">
            @2020 skafi, ps.
          </div>
          <p></p>
        </div>
        <div class="sk-footer-element sk-flex-col">

          <ul class=" margin-0 sk-footer">
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">About me</a>
            </li>
            <li>
              <a href="#">Wrok</a>
            </li>
            <li>
              <a href="#">Git in touch</a>
            </li>
          </ul>
          <div class="sk-footer-icons">
            <a href=""><i class="fab fa-github"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
            <a href=""><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <br>
  <br>
  <!-- <div style="margin: 100px;"></div> -->
  <!-- <div id="container">
    <div class="card" data-offset="20">
      <div data-offset="-10" class="layer"></div>
    </div>
  </div> -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js" integrity="sha256-+Q/z/qVOexByW1Wpv81lTLvntnZQVYppIL1lBdhtIq0=" crossorigin="anonymous"></script>
  <script src="//code.tidio.co/vkwt53cuiridmzbas6m6zwkyjcdwb8ui.js" async></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.5.2/smooth-scrollbar.js" integrity="sha256-6Z1pVtavnUt7YMua8WvatI1NbhECmyL8DMb8DDqrnKg=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.5.2/plugins/overscroll.js" integrity="sha256-Q2+Qb+1Yl05mT5BBMeAE15Dce0Ti1OLDXMKj/czMJh0=" crossorigin="anonymous"></script> -->
  <script src="./js/main.js"></script>
  <!-- <script src="./js/behance.js"></script> -->

</body>



</html>