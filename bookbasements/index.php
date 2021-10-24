<!DOCTYPE html>
<?php
include 'includes/header.php';
 ?>

<body>
  <!-- thanh navbar đặt lên trên cùng -->
  <nav id="navbar">
    <!-- thanh dropdown menu để ở đây vì kích cỡ trình duyệt nhỏ -->
    <div id="dropdown-menu">
      <!-- logo đặt ở đây -->
      <div class="logo-container">
        <a class="brand">Book Basement</a>
      </div>

      <div class="component-right">
        <!-- list menu thật để ở đây -->
        <ul id="menu">
          <li class="menu-item">
            <i class="fas fa-home"></i>
            <span class="menu-title">Home</span>
          </li>
          <li class="menu-item">
            <i class="fas fa-book"></i>
            <span class="menu-title">Book list</span>
          </li>
          <li class="menu-item">
            <i class="fas fa-book"></i>
            <span class="menu-title">Book type</span>
          </li>
          <li class="menu-item">
            <i class="fas fa-share"></i>
            <span class="menu-title">Comment</span>
          </li>
          <li class="menu-item">
            <i class="far fa-address-book"></i>
            <span class="menu-title">Contact</span>
          </li>
          <li class="menu-item" id="login">
            <i class="fas fa-user"></i>
            <span class="btn-content">Login</span>
          </li>
          <li class="menu-item" id="register">
            <i class="fas fa-user"></i>
            <span class="btn-content">Create Account</span>
          </li>
        </ul>
      </div>
      <div id="dropdown-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <!-- chỗ chứa các thành phần chính -->
  <div id="container">
    <!-- thành phần tiêu đề -->
    <div id="article">
      <h1 class="title">Book Basement</h1>
      <h3 class="subtitle">Achive your knowledge and understanding</h3>
    </div>

    <!-- thành phần thể loại -->
    <div id="genres-bar">
      <div class="genres-left">
        <ul id="genres">
          <li class="genres-item">
            Thể loại
            <!-- span.genres-tit -->
            <ul id="genres-1" class="genres-item-container">
              <input class="input genres-item-title" placeholder="Search..." name="search" spellcheck="false" autocomplete="off" id="genres-search-input-1" />

              <li class="genres-item-title">Trinh thám</li>
              <li class="genres-item-title">Isekai</li>
              <li class="genres-item-title">Drama</li>
              <li class="genres-item-title">Life</li>
              <li class="genres-item-title">Ngôn tình</li>
              <li class="genres-item-title">Horror</li>
              <li class="genres-item-title">Comic</li>
            </ul>
          </li>
          <li id="genres-2" class="genres-item">
            Thể loại

            <ul class="genres-item-container">
              <input class="input genres-item-title" placeholder="Search..." name="search" spellcheck="false" autocomplete="off" id="genres-search-input-2" />

              <li class="genres-item-title">Trinh thám</li>
              <li class="genres-item-title">Isekai</li>
              <li class="genres-item-title">Drama</li>
              <li class="genres-item-title">Life</li>
              <li class="genres-item-title">Ngôn tình</li>
              <li class="genres-item-title">Horror</li>
              <li class="genres-item-title">Comic</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="genres-right">
        <input name="search" spellcheck="false" autocomplete="off" id="search" placeholder="Search..." />
        <button type="submit" class="btn" id="search-btn">Search</button>
      </div>
    </div>

    <!-- chứa nội dung trang và sidebar của trang -->
    <div id="content-container">
      <!-- thành phần chi tiết về chủ đề nào đó -->
      <div class="genres-detail">
        <div class="genres-topic">
          <div class="topic-name">Light Novel</div>
          <button class="button-detail">Details</button>
        </div>
        <div class="genres-topic">
          <div class="topic-name">Manga</div>
          <button class="button-detail">Details</button>
        </div>
        <div class="genres-topic">
          <div class="topic-name">Novel Book</div>
          <button class="button-detail">Details</button>
        </div>
      </div>

      <!-- thành phần chứa tin tức quan trọng, sidebar của trang -->
      <div class="body-content">
        <!-- thành phần tin tức -->
        <div class="content-wrapper">
          <!-- content 1 -->
          <div class="content-item-container">
            <h1 class="content-item-title">Naruto</h1>
            <div class="content-item-body">
              <div class="image-align">
                <img class="image" src="http://localhost:8000/image/1.jpg"></img>
              </div>
              <h2 class="content-item-subtitle">
                Câu chuyện cậu bé đi tìm mảnh đời còn lại của cuộc đời
              </h2>
            </div>
          </div>

          <!-- content 2 -->
          <div class="content-item-container">
            <h1 class="content-item-title">Uma Musume: Pretty Derby</h1>
            <div class="content-item-body">
              <div class="image-align">
                <img class="image" src="http://localhost:8000/image/2.jpg"></img>
              </div>
              <h2 class="content-item-subtitle">
                Hành trình của những bé ngựa trên trường đua để phân thắng bại
              </h2>
            </div>
          </div>

          <!-- content 3 -->
          <div class="content-item-container">
            <h1 class="content-item-title">Nguyễn Nhật Ánh</h1>
            <div class="content-item-body">
              <div class="image-align">
                <img class="image" src="http://localhost:8000/image/3.jpg"></img>
              </div>
              <h2 class="content-item-subtitle">
                Câu chuyện về đời sống tuổi học trò của nữ sinh và những câu truyện đằng sau
              </h2>
            </div>
          </div>
        </div>

        <!-- thành phần sidebar -->
        <div class="sidebar">
          <h2 class="sidebar-title">Hot Trend</h2>
          <ul id="list">
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
            <li class="list-item">
              <a href="/">Danh sách</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- footer của trang -->
  <footer>
    <!-- cột 1 của footer component -->
    <div class="col">
      <h2 class="col-title">Company</h2>
      <ul id="info">
        <li class="info-item">
          <a href="/">about us</a>
        </li>
        <li class="info-item">
          <a href="/">our services</a>
        </li>
        <li class="info-item">
          <a href="/">privacy policy</a>
        </li>
        <li class="info-item">
          <a href="/">affiliate program</a>
        </li>
      </ul>
    </div>

    <!-- cột 2 của footer component -->
    <div class="col">
      <h2 class="col-title">Get Help</h2>
      <ul id="info">
        <li class="info-item">
          <a href="/">FAQ</a>
        </li>
        <li class="info-item">
          <a href="/">shipping</a>
        </li>
        <li class="info-item">
          <a href="/">returns</a>
        </li>
        <li class="info-item">
          <a href="/">order status</a>
        </li>
        <li class="info-item">
          <a href="/">payment options</a>
        </li>
      </ul>
    </div>

    <!-- cột 3 của footer component -->
    <div class="col">
      <h2 class="col-title">Online Shop</h2>
      <ul id="info">
        <li class="info-item">
          <a href="/">watch</a>
        </li>
        <li class="info-item">
          <a href="/">bag</a>
        </li>
        <li class="info-item">
          <a href="/">shoes</a>
        </li>
        <li class="info-item">
          <a href="/">dress</a>
        </li>
      </ul>
    </div>

    <!-- cột 4 của footer component -->
    <div class="col">
      <h2 class="col-title">Follow Us</h2>
      <ul id="info" class="infos">
        <li class="info-item">
          <a href="/">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li class="info-item">
          <a href="/">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="info-item">
          <a href="/">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="info-item">
          <a href="/">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>

  <script type="text/javascript">
    const contentItems = [
      "Trinh thám",
      "Isekai",
      "Drama",
      "Life",
      "Ngôn tình",
      "Horror",
      "Comic"
    ]

    window.addEventListener('DOMContentLoaded', function(event) {
      event.preventDefault()
      const dropdownButton = document.getElementById('dropdown-btn')
      const componentRight = document.getElementsByClassName('component-right')[0]
      const loginButton = document.getElementById('login')
      const registerButton = document.getElementById('register')
      const genresItem1 = document.querySelectorAll('#container #genres-bar .genres-left #genres .genres-item')[0]
      const genres1 = document.getElementById('genres-1')
      const genres2 = document.getElementById('genres-2')
      const genres1Input = genres1.firstElementChild
      let root = document.documentElement;

      function changeDOMGenresList(gens) {
        try {
          for(let child of [...genres1.children].slice(1, [...genres1.children].length)) {
            genres1.removeChild(child)
          }
        } catch(e) {
          console.info("")
        }

        gens.forEach(item => {
          var li = document.createElement('li')
          li.setAttribute('class', 'genres-item-title')
          li.setAttribute('aria-type', 'label')
          li.innerHTML = item
          genres1.appendChild(li)
        })

        root.style.setProperty('--genresContainer', `${(gens.length * 41) + 41}px`);
      }

      genres1Input.addEventListener('input', function(e) {
        var value = e.target.value

        var filtered = contentItems.filter(item => {
          if(item.toLowerCase().includes(value.toLowerCase())) {
            return item
          }
        })

        changeDOMGenresList(filtered)
      })

      dropdownButton.onclick = function(e) {
        e.preventDefault()

        if(!componentRight.hasAttribute('data-state')) {
          componentRight.setAttribute('data-state', true)
        } else {
          if(componentRight.getAttribute('data-state') === 'false') {
            componentRight.setAttribute('data-state', true)
          } else {
            componentRight.setAttribute('data-state', false)
          }
        }

        return false
      }

      window.onresize = function(e) {
        e.preventDefault()
        var width = window.innerWidth 

        if(width <= 992) {
          var matchesClass = /btn/gm

          if(componentRight.hasAttribute('data-state')) {
            componentRight.removeAttribute('data-state')
          }

          try {
            loginButton.classList.remove('btn')
            registerButton.classList.remove('btn')
          } catch(e) {
            throw e
          }
        } else {
          loginButton.classList.add('btn')
          registerButton.classList.add('btn')
        }

        return false
      }
    }, false)
  </script>
  <!-- <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="main-navbar">
          <a class="navbar-brand font-title" href="index.html">Book Basement</a>
          <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="#banner-wrapper"><i class="fa fa-home" aria-hidden="true">Home</i><span class="sr-only">(current)</span></a>
                  </li>


                  <li class="nav-item">
                      <a class="nav-link" href="#funda-wrapper">
                          <i class="fa fa-book" aria-hidden="true">
                              Book list
                          </i>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="#funda-wrapper">
                          <i class="fa fa-book">
                              Book Type
                          </i>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="#contact">
                          <i class="fa fa-share" >
                              Comment
                          </i>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact">
                          <i class="fa fa-comment" >
                              Contact
                          </i>
                      </a>
                  </li>


              </ul>
              <form class="form-inline my-2 my-lg-0"></form>
              <button type="button" class="btn btn-outline-success btn-md">&nbsp;<i class="fa fa-user" >&nbsp;Login in</i>&nbsp;</button>
              </form>
            </ul>
            <form class="form-inline my-2 my-lg-0"></form>
            <button type="button" class="btn btn-outline-success btn-md">&nbsp;<i class="fa fa-user" >&nbsp;Create Account</i>&nbsp;</button>
            </form>

          </div>
      </nav>
  </div> -->
  <!-- navbar -->

  <!-- floating menu -->
  <!-- <div class="float-menu right-hidden" id="float-menu-rightside">
      <div class="float-menu-ico font-title">
          <a href="#banner-wrapper">
              <img src="img/icon.png">
          </a>
      </div>




  </div> -->
  <!-- floating menu -->


<!-- banner -->
<!-- <div id="wrap">
  <div class="jumbotron text-center" id="banner">
		<h1 class="display-1 font-title">Book Basement</h1>
		<p class="lead font-paragraph">Achive your knowledge and understanding</p>

			</a>
		</p>
	</div>
</div> -->
<!-- banner -->
<!-- <nav>
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Thể loại</button>
    <div id="myDropdown" class="dropdown-content">
      <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
      <ul>
      <a href="#thamtu">Trinh thám</a>
      <a href="#chuyensinh">Isekai</a>
      <a href="#kiemchuyen">Drama</a>
      <a href="#doisong">Life</a>
      <a href="#love">Ngôn tình</a>
      <a href="#kinhdi">Horror</a>
      <a href="#comic">Comic</a>
    </ul>
    </div>

</div>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Thể loại</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <ul>
    <a href="#thamtu">Trinh thám</a>
    <a href="#chuyensinh">Isekai</a>
    <a href="#kiemchuyen">Drama</a>
    <a href="#doisong">Life</a>
    <a href="#love">Ngôn tình</a>
    <a href="#kinhdi">Horror</a>
      <a href="#comic">Comic</a>
    </ul>


    </div>





</div>
  <div  class="search">
  <input type="searcch" placeholder="Search...">
  <button>Search </button>

    </div> -->
<!--     <script>
    /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
  txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
    a[i].style.display = "none";
  }
  }
  }
</script> -->





  <!-- </nav> -->

  <!-- code -->
  <!-- <div id="funda-wrapper">
  	<div class="container">
  		<hr />
  		<br />
  		<div class="row">
  			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
  				<div class="card card-default opacity text-center">
  					<div class="img-top-holder">
  						<img class="card-img-top" src="img/doomer.jpg" alt="">
  					</div>

  					<hr />
  					<div class="card-body">
  						<h4 class="card-title font-title">Light Novel</h4>
  						<p class="card-text font-paragraph"></p>
  						<hr />
  						<a class="btn btn-primary btn-lg btn-block card-lightpink-lightcoral font-paragraph" href="c-editor.html" role="button">
  							Details
  						</a>
  					</div>
  				</div>
  			</div>

  			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
  				<div class="card card-default opacity text-center">
  					<div class="img-top-holder">
  						<img class="card-img-top" src="img/honky.jpg" alt="">
  					</div>
  					<hr />
  					<div class="card-body">
  						<h4 class="card-title font-title">Manga</h4>
  						<p class="card-text font-paragraph"> </p>
  						<hr />
  						<a class="btn btn-primary btn-lg btn-block card-lightpink-lightcoral font-paragraph" href="c-editor.html" role="button">
  							Details
  						</a>
  					</div>
  				</div>
  			</div>

  			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
  				<div class="card card-default opacity text-center">
  					<div class="img-top-holder">
  						<img class="card-img-top " src="img/snem.png" alt="">
  					</div>

  					<hr />
  					<div class="card-body">
  						<h4 class="card-title font-title">Novel Book</h4>
  						<p class="card-text font-paragraph"></p>
  						<hr />
  						<a class="btn btn-primary btn-lg btn-block card-lightpink-lightcoral font-paragraph" href="java-editor.html" role="button">
  							Details
  						</a>
  					</div>
  				</div>
  			</div>
  		</div>

      main-->
      <!-- <div id="main">
        <div id="left">
          <ul>
            <li>
              <h1>Naruto       </h1>
              <img src="image/1.jpg"/>
              <h3>Câu chuyện cậu bé đi tìm mảnh đời còn lại của cuộc đời</h3>
            </li>
            <li>
              <h1> Uma Musume: Pretty Derby</h1>
              <img src="image/2.jpg"/>
                <h2>Hành trình của những bé ngựa trên trường đua để phân thắng bại</h2>
            </li>
            <li>
                <img src="image/3.jpg"/>
                <h3>Câu chuyện về đời sống tuổi học trò của nữ sinh và những câu truyện đằng sau</h3>
            </li>
          </ul>

      </div>
      <div id="right">
        <div class="menu_right">
          <h3 class="font-title white-text">Hot Trend</h3>
          <ul>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>
            <li><a href="">Danh sách</a></li>

          </ul>

      </div>
    </div>
</body>

<?php
include 'includes/header.php';
 ?>