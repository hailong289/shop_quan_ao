<?php
require_once "models/home.php";
require_once "../PHPMailer-master/src/PHPMailer.php";
require_once "../PHPMailer-master/src/SMTP.php";
class home
{
  function __construct()
  {
    $this->model = new models_home;
    $this->mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $act = "index";
    if (isset($_GET['act'])) $act = $_GET['act'];
    // if (isset($_GET['key']) == true) $key = $_GET['key'];
    switch ($act) {
      case 'index':
        $this->index();
        break;
      case 'lienhe':
        $this->lienhe();
        break;
      case 'products':
        $this->List_Product();
        break;
      case 'detail':
        $this->detail();
        break;
      case 'cart':
        $this->cart();
        break;
      case 'dangnhap':
        $this->SIgnIN();
        break;
      case 'dangky':
        $this->SignUP();
        break;
      case 'thanhtoan':
        $this->thanhtoan();
        break;
      case 'donhang':
        $this->donhang();
        break;
      case 'binhluan':
        $this->comment();
        break;
      case 'doimk':
        $this->Doimk();
      case 'quenpass':
        $this->quenPass();
        break;
      case 'account':
        $this->account();
        break;
      case 'logout':
        $this->Logout();
        break;
      default:
        # code...
        break;
    }
  }
  // function Url($string)
  // {
  //   $string = trim($string);
  //   $string = str_replace(' ', '-', $string);
  //   $unicode = array(
  //     'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
  //     'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
  //     'd' => 'đ', 'D' => 'Đ',
  //     'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
  //     'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
  //     'i' => 'í|ì|ỉ|ĩ|ị', 'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
  //     'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
  //     'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
  //     'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
  //     'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
  //     'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
  //     'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
  //   );
  //   foreach ($unicode as $khongdau => $codau) {
  //     $arr = explode("|", $codau);
  //     $string = str_replace($arr, $khongdau, $string);
  //   }
  //   $string = str_replace('(', '', $string);
  //   $string = str_replace(')', '', $string);
  //   $string = str_replace('/', '', $string);
  //   return $string;
  // }
  function index()
  {
    $dm_3 = $this->model->get_three_Categories();
  
   
    $dm = $this->model->get_all_Categories();
    $cate_woman = $this->model->List_cate_WOMEN();
    $cate_man = $this->model->List_cate_Man();
    $views = "views/home.php";
    require_once "views/index.php";
  }
  function lienhe()
  {
    $views = "views/lienhe.php";
    require_once "views/index.php";
  }
  function List_Product()
  {
    $dm = $this->model->get_all_Categories();
    $page_num = 1;
    // if (isset($_GET['sort']) == true) $sort = $_GET['sort'];
    if (isset($_GET['page'])) $page_num = $_GET['page'];
    $page_size = PAGE_SITE;
    if (isset($_GET['slug']) == true) {
      $slug = $_GET['slug'];
      $id_dm = $this->model->getID_DM($slug);
      $products = $this->model->ListCate_SP($id_dm, $page_num, $page_size);
      $total_sp = $this->model->CountsCate_SP($id_dm);
      $base = "danh-muc/" . $slug. "/";
      $links = $this->model->base_links($total_sp, $page_num, $page_size, $base);
      $views = "views/list_product.php";
      require_once "views/index.php";
      // print_r($products_Women);
      // echo "</pre>";
    } elseif (isset($_POST['key']) == true) {
      $key = $_POST['key'];
      $products = $this->model->ListKey_SP($key, $page_num, $page_size);
      $total_sp = $this->model->CountsKey_SP($key);
      $base = SITE_URL . "?act=products&key=" . $key;
      $links = $this->model->base_links($total_sp, $page_num, $page_size, $base);
      //  echo $key;
      $views = "views/list_product.php";
      require_once "views/index.php";
    } elseif (isset($_GET['key']) == true) {
      $key = $_GET['key'];
      $products = $this->model->ListKey_SP($key, $page_num, $page_size);
      $total_sp = $this->model->CountsKey_SP($key);
      $base = SITE_URL . "?act=products&key=" . $key;
      $links = $this->model->base_links($total_sp, $page_num, $page_size, $base);
      //  echo $key;
      $views = "views/list_product.php";
      require_once "views/index.php";
    } else {
      $products = $this->model->List_sp($page_num, $page_size);
      $total_sp = $this->model->Counts_SP();
      $base = "san-pham/";
      $links = $this->model->base_links($total_sp, $page_num, $page_size, $base);
      $views = "views/list_product.php";
      require_once "views/index.php";
    }
  }
  function detail()
  {
    $slug = $_GET['slug'];
    $product = $this->model->GetSP($slug);
    $dm = $this->model->get_all_Categories();
    $name = $this->model->Get_Name_DM($product['ID_DM']);
    $product_lq = $this->model->ListSP_Lienquan();
    $bl = $this->model->getALl_BL($product['ID_SP']);
    $sl_bl = $this->model->COunts_BL($product['ID_SP']);
    $this->model->Update_Luotxem($product['ID_SP']);
    $views = "views/detail.php";
    require_once "views/index.php";
  }
  function cart()
  {
    $id = $_GET['id'];
    settype($id, "int");
    $what = "add";
    if (isset($_GET['what'])) $what = $_GET['what'];
    if ($what == "add") {
      $sp = $this->model->GetSP_detail($id);
      if (isset($_SESSION['cart']) == false) $_SESSION['cart'] = []; //tạo mảng rổng nếu chưa có

      $spInCart = $_SESSION['cart'][$id];
      if ($spInCart != null) $soluong = $spInCart['sl'] + 1;
      else $soluong = 1;
      $_SESSION['cart'][$id] = [
        'TenSP' => $sp['name'],
        'Gia' => $sp['gia'],
        'img' => $sp['img'],
        'sl' => $soluong
      ];
      $_SESSION['countdh'] = count($_SESSION['cart']);
      header('location: https://hailong.com/project/shopquanao/gio-hang');
      // var_dump($_SESSION['cart']);
    } elseif ($what == "view") {
      $views = "views/cart.php";
      require_once "views/index.php";
    } elseif ($what == "remove") {
      $id_cart = $_GET['id'];
      unset($_SESSION['cart'][$id_cart]);
      $_SESSION['countdh'] = count($_SESSION['cart']);
      header('location: https://hailong.com/project/shopquanao/gio-hang');
    } elseif ($what == "update") {
      $sl = $_POST['sl'];
      $id = $_POST['id'];
      // $hihi = ["sl"=>$sl,"id"=>$id];
      $_SESSION['cart'][$id]['sl'] = $sl;
      // echo json_encode($hihi);
      // echo $_SESSION['cart'][$id]['sl'] * $_SESSION['cart'][$id]['Gia'];
      // header('location: ?act=cart&what=view');
    }
    // echo "<pre>";
    // print_r($_SESSION['cart']);

  }
  function thanhtoan()
  {
    $checkout = "view";
    if (isset($_GET['checkout']) == true) $checkout = $_GET['checkout'];
    if ($checkout == "view") {
      $views = "views/checkout.php";
      require_once "views/index.php";
    } elseif ($checkout == "dathang") {
      $hoten = $_POST['hoten'];
      // $_SESSION['nguoidat'] = $hoten;
      if (isset($_SESSION['ID_USER']) == true) {
        $id_user = $_SESSION['ID_USER'];
      } else {
        $id_user = null;
      }
      $tend = $_POST['tenduong'];
      $huyenq = $_POST['hq'];
      $tp = $_POST['ttp'];
      $diachi = $tend . ", " . $huyenq . ", " . $tp;
      $email = $_POST['email'];
      $phone = $_POST['sdt'];
      $ghichu = $_POST['gc'];
      $ht_Thanhtoan = $_POST['hinh_thuc'];
      $trangthai = true;
      if (empty($hoten)) {
        $trangthai = false;
        $error_ht = "<p class='text-danger'>Không để trống họ và tên !</p>";
      }
      if (empty($tend)) {
        $trangthai = false;
        $error_td = "<p class='text-danger'>Không để trống !</p>";
      }
      if (empty($huyenq)) {
        $trangthai = false;
        $error_hq = "<p class='text-danger'>Không để trống huyện / quận !</p>";
      }
      if (empty($tp)) {
        $trangthai = false;
        $error_tp = "<p class='text-danger'>Không để trống tỉnh / thành phố !</p>";
      }
      if (empty($email)) {
        $trangthai = false;
        $error_email = "<p class='text-danger'>Không để trống email !</p>";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $trangthai = false;
        $error_email = "<p class='text-danger'>Email không hợp lệ !</p>";
      }
      if (empty($phone)) {
        $trangthai = false;
        $error_sdt = "<p class='text-danger'>Không để trống số điện thoại !</p>";
      }
      if ($trangthai == false) {
        $views = "views/checkout.php";
        require_once "views/index.php";
      } else {
        if (isset($_SESSION['ID_DH'])) $id_dh = $_SESSION['ID_DH'];
        else $id_dh = "-1";
        // echo $id_dh;
        $id_new = $this->model->luudonhang($hoten, $diachi, $email, $phone, $ghichu, $id_dh, $id_user);
        // exit();
        if ($id_new) {
          $_SESSION['ID_DH'] = $id_new;
          // echo $idDH;
          $giohang = $_SESSION['cart'];
          // $this->model->Update_LuotMua($giohang);
          // echo '<pre>';
          // print_r($giohang);
          // echo $idDHNew;
          $this->model->luugiohangchitiet($id_new, $giohang);
          $this->model->UpdateLMvaTK($giohang);
          if ($ht_Thanhtoan == 1) {
            unset($_SESSION['cart']);
            // unset($_SESSION['total']);
            unset($_SESSION['countdh']);
            $_SESSION['camon'] = 'Cảm ơn bạn đã mua hàng';
            header("location: trang-chu");
          } else {
            unset($_SESSION['cart']);
            // unset($_SESSION['total']);
            unset($_SESSION['countdh']);
            header('location: thanh-toan-online');
          }
        }
      }
    } elseif ($checkout == "vnp") {
      require_once "views/vnp/index.php";
    } elseif ($checkout == "create_pay_ment") {
      require_once "views/vnp/vnpay_create_payment.php";
    } elseif ($checkout == "return") {
      // $row = $this->model->getIDPayment();
      require_once "views/vnp/vnpay_return.php";
    }
  }
  // DƠn hàng
  function donhang()
  {
    $dh = $this->model->ALLdonhang($_SESSION['ID_USER']);
    if(isset($_GET['huy'])){
      $id = $_GET['huy'];
      $this->model->update_TTDH(3, $id);
      header('location: https://hailong.com/project/shopquanao/don-hang');
    }
    if(isset($_GET['xacnhan'])){
      $id = $_GET['xacnhan'];
      $this->model->update_TTDH(2, $id);
      header('location: https://hailong.com/project/shopquanao/don-hang');
    }
    if(isset($_GET['xoa'])){
      $id = $_GET['xoa'];
      $this->model->Delete_TTDH(0, $id);
      header('location: https://hailong.com/project/shopquanao/don-hang');
    }
    $views = "views/donhang.php";
    require_once "views/index.php";
  }
  function SIgnIN()
  {
    $sign = "view";
    if (isset($_GET['sign']) == true) $sign = $_GET['sign'];
    if ($sign == "view") {
      $views = "views/dangnhap.php";
      require_once "views/index.php";
    } elseif ($sign == "checkLogin") {
      $ten_dn = $_POST['name'];
      $pass = $_POST['pass'];
      $checkLogin = $this->model->CheckLogin($ten_dn);
      if (password_verify($pass, $checkLogin['pass'])) {
        $_SESSION['ID_USER'] = $checkLogin['ID_User'];
        $_SESSION['USER'] = $checkLogin['ho_ten'];
        $_SESSION['camon'] = "Đăng nhập thành công";
        header("location: trang-chu");
      } else {
        if ($checkLogin['status'] == 0) {
          $_error = "Tài khoản của bạn chưa được kích hoạt";
        } else {
          $_error = "Tên đăng nhập hoặc mật khẩu không chính xác";
        }
        $views = "views/dangnhap.php";
        require_once "views/index.php";
      }
    } elseif ($sign == "kichhoat") {
      $id_User = $_POST['id'];
      $this->model->ActiveUser($id_User);
      $_SESSION['tb_tc'] = "Kích hoạt tài khoản thành công !";
      header('location: dang-nhap');
    }
  }
  function SignUP()
  {
    $sign_up = "view";
    if (isset($_GET['sign_up']) == true) $sign_up = $_GET['sign_up'];
    if ($sign_up == "view") {
      $views = "views/dangky.php";
      require_once "views/index.php";
    } elseif ($sign_up == "insert") {
      $ho = $_POST['ho'];
      $ten = $_POST['ten'];
      $hoten = trim($ho . " " . $ten);
      $email = $_POST['email'];
      $ten_tk = $_POST['name'];
      $mk = $_POST['pass'];
      $regexmk = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/"; // Tối thiểu 6 ký tự, ít nhất một chữ cái và một số
      $remk = $_POST['repass'];
      $check_tk = $this->model->checkTen_dn($ten_tk);
      $check_email = $this->model->checkEMail($email);
      $trangthai = true;
      if (empty($ten)) {
        $trangthai = false;
        $_error_t = "<pre class='text-danger'>Không để trống tên</pre>";
      }
      if (empty($ho)) {
        $trangthai = false;
        $_error_h = "<p class='text-danger'>Không để trống họ</p>";
      }
      if (empty($ten_tk)) {
        $trangthai = false;
        $_error_tk = "<p class='text-danger'>Không để trống tên tài khoản</p>";
      } elseif ($check_tk) {
        $trangthai = false;
        $_error_tk = "<p class='text-danger'>Tài khoản đã tồn tại</p>";
      }
      if (empty($mk)) {
        $trangthai = false;
        $_error_mk = "<p class='text-danger'>Không để trống mật khẩu</p>";
      } elseif (preg_match($regexmk, $mk) == false) {
        $trangthai = false;
        $_error_mk = "<p class='text-danger'>Mật khẩu tối thiểu sáu ký tự, một chữ cái và số</p>";
      }
      if ($remk != $mk) {
        $trangthai = false;
        $_error_remk = "<p class='text-danger'>Mật khẩu không trùng khớp</p>";
      }
      if (empty($email)) {
        $trangthai = false;
        $_error_email = "<p class='text-danger'>Không để trống email</p>";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $trangthai = false;
        $_error_email = "<p class='text-danger'>Email không hợp lệ</p>";
      } elseif ($check_email) {
        $trangthai = false;
        $_error_email = "<p class='text-danger'>Email đã tồn tại</p>";
      }
      // echo $trangthai;
      if ($trangthai == false) {
        $views = "views/dangky.php";
        require_once "views/index.php";
      } else {
        $mk_new = password_hash($mk, PASSWORD_DEFAULT);
        $id_User = $this->model->InsertUser($hoten, $email, $ten_tk, $mk_new);
        $user = "Shop Volder";
        try {
          $mail = $this->mail;
          $mail->SMTPDebug = 0;  // Enable verbose debug output
          $mail->isSMTP();
          $mail->CharSet  = "utf-8";
          $mail->Host = 'smtp.gmail.com';  //SMTP servers
          $mail->SMTPAuth = true; // Enable authentication
          $mail->Username = 'longdhai2@gmail.com';  // SMTP username
          $mail->Password = 'hailong2809';   // SMTP password
          $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
          $mail->Port = 465;  // port to connect to                
          $mail->setFrom('longdhai2@gmail.com', 'long');
          $mail->addAddress($email, $user); //mail và tên người nhận       
          $mail->isHTML(true);  // Set email format to HTML
          $mail->Subject = 'Kích hoạt tài khoản';
          // $linKH = sprintf($linkKH, $idUser);
          $mail->Body = '<form action="https://hailong.com/project/shopquanao/site/?act=dangnhap&sign=kichhoat" method="post" role="form">
          <h2>Hãy nhấp vào nút kích hoạt dưới đây để tham gia cùng chúng tôi</h2>
            <input type="hidden" name="id" value="' . $id_User . '">
            <button style="color: white;cursor: pointer;background-color: red;border: 0.5px solid red;border-radius: 8px;padding: 10px;" type="submit">Kích hoạt</button>
          </form>';
          $mail->send();
          $message = 'kích hoạt tài khoản !';
        } catch (Exception $e) {
          echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
        $_SESSION['tb_tc'] = "Kiểm tra email để kích hoạt tài khoản !";
        header('location: dang-nhap');
      }
    }
  }
  function Logout()
  {
    unset($_SESSION['ID_USER']);
    unset($_SESSION['USER']);
    header("location: https://".$_SERVER['SERVER_NAME']."/project/shopquanao/");
  }
  function comment()
  {
    $noidung = $_POST['noidung'];
    $id = $_POST['id'];
    $id_sp = $_POST['id_sp'];
    $this->model->InsertComment($noidung, $id, $id_sp);

    $bl = $this->model->getALl_BL($id_sp);
    $sl_bl = $this->model->COunts_BL($id_sp);

    $html = "";
    foreach ($bl as $nd) {
      $name = $this->model->GetName_BL($nd['ID_User']);
      $html .= '<div class="co-item"><div class="avatar-pic"><img src="./upload/user.jpg" alt=""></div>' .
        '<div class="avatar-text">' .
        '<h5>' . $name . '<span>' . $nd['date'] . '</span></h5><div class="at-reply">' . $nd['noidung'] . '</div></div></div>';
    }
    $data = ["sl_bl" => $sl_bl, "noidung" => $html];
    echo json_encode($data);
  }
  function Doimk()
  {
    $condition = "views";
    if (isset($_GET['id'])) $id = $_GET['id'];
    if (isset($_GET['condition'])) $condition = $_GET['condition'];
    if ($condition == "views") {
      $views = "views/doimk.php";
      require_once "views/index.php";
    } elseif ($condition == "changepass") {
      $id = $_POST['id'];
      $mk = $_POST['mk'];
      $remk = $_POST['remk'];
      $trangthai = true;
      if (empty($mk)) {
        $trangthai = false;
        $error_mk = "Không để trống mật khẩu !";
      }
      if ($mk != $remk) {
        $trangthai = false;
        $error_remk = "Mật khẩu không trùng khớp !";
      }
      // var_dump($trangthai);
      if ($trangthai == false) {
        $views = "views/doimk.php";
        require_once "views/index.php";
      } else {
        $mk_new = password_hash($mk, PASSWORD_DEFAULT);
        $this->model->DoiPassQuen_User($id, $mk_new);
        $_SESSION['camon'] = "Đổi mật khẩu thành công !";
        header('location: trang-chu');
      }
    }
  }
  function quenPass()
  {
    $check = "views";
    if (isset($_GET['checkout'])) $check = $_GET['checkout'];
    if ($check == "views") {
      $views = "views/quenmatkhau.php";
      require_once "views/index.php";
    } elseif ($check == "email") {
      $email = $_POST['email'];
      $check = $this->model->checkEMail($email);
      if (!is_array($check)) {
        $error = "Email không tồn tại !";
        $views = "views/quenmatkhau.php";
        require_once "views/index.php";
      } else {
        $user = "Shop Volder";
        $email = $check['email'];
        try {
          $mail = $this->mail;
          $mail->SMTPDebug = 0;  // Enable verbose debug output
          $mail->isSMTP();
          $mail->CharSet  = "utf-8";
          $mail->Host = 'smtp.gmail.com';  //SMTP servers
          $mail->SMTPAuth = true; // Enable authentication
          $mail->Username = 'longdhai2@gmail.com';  // SMTP username
          $mail->Password = 'hailong2809';   // SMTP password
          $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
          $mail->Port = 465;  // port to connect to                
          $mail->setFrom('longdhai2@gmail.com', 'long');
          $mail->addAddress($email, $user); //mail và tên người nhận       
          $mail->isHTML(true);  // Set email format to HTML
          $mail->Subject = 'Đổi mật khẩu mới !';
          // $linKH = sprintf($linkKH, $idUser);
          $mail->Body = '<a href="https://hailong.com/project/shopquanao/doi-mk_' . $check['ID_User'] . '">Đổi mật khẩu</a>';
          $mail->send();
          $message = 'kích hoạt tài khoản !';
        } catch (Exception $e) {
          echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
        $_SESSION['camon'] = "Kiểm tra email !";
        header('location: quen-pass');
      }
    }
  }
  function account()
  {
    $what = "views";
    if (isset($_GET['what'])) $what = $_GET['what'];
    if ($what == "views") {
      $user = $this->model->GetUser_ByID($_SESSION['ID_USER']);
      // $viewTT = "views/account.php";
      $views = "views/thongtintk.php";
      require_once "views/index.php";
    } elseif ($what == "updatetk") {
      $hoten = $_POST['hoten'];
      $email = $_POST['email'];
      $sdt = $_POST['sdt'];
      $id_user = $_POST['id'];
      if ($_FILES['img']['name'] != null) {
        $path_file = '../upload/';
        $hinh = $_FILES['img']['name'];
        $target_files = $path_file . basename($hinh);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_files);
      } else {
        $hinh = null;
      }
      $trangthai = true;
      if (empty($hoten)) {
        $trangthai = false;
        $error_ht = "<p class='text-danger'>Không để trống họ tên</p>";
      }
      if (empty($email)) {
        $trangthai = false;
        $error_email = "<p class='text-danger'>Không để trống email</p>";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $trangthai = false;
        $error_email = "<p class='text-danger'>Email không hợp lệ</p>";
      }
      if (empty($sdt)) {
        $trangthai = false;
        $error_sdt = "<p class='text-danger'>Không để trống số điện thoại</p>";
      }
      if($trangthai != false){
         $this->model->Update_User($hoten, $email, $sdt, $hinh, $id_user);
         header('location: ?act=account');
      }else{
        // $viewTT = "views/account.php";
        $views = "views/thongtintk.php";
        require_once "views/index.php";
      }
    }
  }
}
