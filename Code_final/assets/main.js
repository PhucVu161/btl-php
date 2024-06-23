const dom = document.querySelector.bind(document);
// const $$ = document.querySelectorAll.bind(document);

// Back to top
const topBtn = dom("#topBtn");
window.onscroll = function () {
  if (
    document.body.scrollTop > 300 ||
    document.documentElement.scrollTop > 300
  ) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
};

function goTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Login
const login = dom("#login");
const signUpButton = dom("#signUp");
const signInButton = dom("#signIn");
const loginContainer = dom("#login-container");
const loginLayer = dom("#login-layer");
const loginClose = dom("#login-close");

login.onclick = (e) => {
  e.preventDefault();
  loginContainer.style.display = "flex";
};

loginClose.onclick = (e) => {
  e.preventDefault();
  loginContainer.style.display = "none";
};

signUpButton.addEventListener("click", () => {
  loginLayer.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  loginLayer.classList.remove("right-panel-active");
});

// Het login

// Tao phieu: giai thich lua chon danh muc co nghia gi
const taophieuGth = dom("#taophieu-dm-giaithich");
const taophieuDm = dom("#category");
taophieuDm.onchange = () => {
  switch (taophieuDm.value) {
    case "Hỗ trợ cài đặt và cấu hình":
      taophieuGth.innerText =
        "*IT Supporter hỗ trợ kích hoạt hệ điều hành,cài đặt và cấu hình các ứng dụng, phần mềm bảo mật và các thiết bị khác.";
      break;
    case "Sửa chữa và bảo trì":
      taophieuGth.innerText =
        "*IT Supporter hỗ trợ sửa chữa và bảo trì các thiết bị, phần mềm và hệ thống. Điều này bao gồm sửa chữa các lỗi phần mềm, sửa chữa thiết bị hỏng và thay thế các linh kiện.";
      break;
    case "Hỗ trợ các ứng dụng":
      taophieuGth.innerText =
        "*IT Supporter hỗ trợ sửa, cài đặt các ứng dụng phổ biến như Microsoft Office, các ứng dụng cho thiết bị di động và các ứng dụng đám mây như Google Drive, Dropbox,...";
      break;
    case "Vệ sinh laptop":
      taophieuGth.innerText = "*IT Supporter hỗ trợ vệ sinh laptop của bạn.";
      break;
    case "Cài đặt phòng máy":
      taophieuGth.innerText =
        "*IT Supporter hỗ trợ cài đặt phòng máy cho cá nhân hoặc doanh nghiệp nhỏ.";
      break;
  }
};

// Luu hoat dong bang local storage
// localStorage.login = 0;
// localStorage.memberStatus = 4 // 0 là admin, 1 là kiểm duyệt, 2 là thành viên Clipboard, 3 là thành viên thường, 4 là khách chưa đăng nhập
const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const handeFormSubmit = () => { // arrow funtion
    // Nếu mà điều kiện cần kiểm tra là thỏa mãn => return true;
    let checkValidate = true;
    let username =  dom("input[name=username]").val().trim();
    let password =  dom("input[name=password]").val().trim();
   
    // Check validate của username
    if(!username){ // có ! là không có giá trị hoặc là false
        alert("Tên đăng nhập không được để trống");
        return false;
    } else if(username.indexOf(' ') >= 0) { // Kiểm tra tên chỉ được viết liền không có khoảng trắng
        alert("Tên đăng nhập không được chứa ký tự khoảng trắng");
        return false;
    }

    if(!password){ 
        alert("Mật khẩu không được để trống");
        return false;
    } else if (password.length < 3 || password.length > 15) {
        alert("Mật khẩu phải có độ dài từ 3 đến 15 ký tự");
        return false;
    }

    return true;
}

// Slick slider trang tintuc
$(document).ready(function(){
  $('.slider').slick({
dots: true,
autoplay: true,
autoplaySpeed: 1000,
infinite: true,
speed: 500,
slide: 'div',
cssEase: 'linear'
});
});
$(document).ready(function(){
  $('.tintuc-top-banner').slick({
dots: true,
autoplay: true,
autoplaySpeed: 1000,
infinite: true,
speed: 500,
slide: 'div',
cssEase: 'linear'
});
});