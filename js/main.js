$(".slider").slick({
  dots: true,
  infinite: true,
  speed: 500,
  cssEase: "linear",
  fade: true,
  arrows: true,
  speed: 700,
  autoPlay: true,
  prevArrow:
    '<svg class="prev" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 40C8.9543 40 -2.7141e-06 31.0457 -1.74846e-06 20C-7.8281e-07 8.9543 8.95431 -2.7141e-06 20 -1.74846e-06C31.0457 -7.8281e-07 40 8.9543 40 20C40 31.0457 31.0457 40 20 40ZM16.1206 13.5198C15.7554 13.1055 15.1632 13.1055 14.798 13.5198L9.58704 19.4308C9.22182 19.8451 9.22182 20.5168 9.58704 20.931L14.798 26.8421C15.1632 27.2563 15.7554 27.2563 16.1206 26.8421C16.4858 26.4278 16.4858 25.7561 16.1206 25.3418L12.4912 21.2248L29.6865 21.2248C30.2388 21.2248 30.6865 20.7771 30.6865 20.2248C30.6865 19.6725 30.2388 19.2248 29.6865 19.2248L12.4138 19.2248L16.1206 15.02C16.4858 14.6057 16.4858 13.934 16.1206 13.5198Z" fill="#7C8B9C"/></svg>',
  nextArrow:
    '<svg width="40" class="next" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 3.49691e-06C31.0457 5.4282e-06 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 1.56562e-06 31.0457 3.49691e-06 20C5.4282e-06 8.95431 8.95431 1.56562e-06 20 3.49691e-06ZM23.8794 26.4802C24.2446 26.8945 24.8368 26.8945 25.202 26.4802L30.413 20.5692C30.7782 20.1549 30.7782 19.4833 30.413 19.069L25.202 13.1579C24.8368 12.7437 24.2446 12.7437 23.8794 13.1579C23.5142 13.5722 23.5142 14.2439 23.8794 14.6582L27.5088 18.7752L10.3135 18.7752C9.7612 18.7752 9.31348 19.2229 9.31348 19.7752C9.31348 20.3275 9.76119 20.7752 10.3135 20.7752L27.5862 20.7752L23.8794 24.98C23.5142 25.3943 23.5142 26.066 23.8794 26.4802Z" fill="#7C8B9C"/></svg>',
});
$(".alsoLikeSlider").slick({
  dots: true,
  infinite: true,
  speed: 500,
  cssEase: "linear",
  arrows: true,
  speed: 700,
  autoPlay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  nextArrow:
    '<button class="slick-next" ><i class="bi bi-chevron-right"></i></button>',
  prevArrow:
    '<button class="slick-prev" ><i class="bi bi-chevron-left"></i></button>',
});

function getOffset(el) {
  var _x = 0;
  var _y = 0;
  while (el && !isNaN(el.offsetLeft) && !isNaN(el.offsetTop)) {
    _x += el.offsetLeft - el.scrollLeft;
    _y += el.offsetTop - el.scrollTop;
    el = el.offsetParent;
  }
  return { top: _y, left: _x };
}

document.addEventListener("scroll", () => {
  if (!document.querySelector("header").getBoundingClientRect().top) {
    document
      .querySelector("header")
      .querySelector("nav")
      .classList.add("Active_Navbar");
  } else {
    document
      .querySelector("header")
      .querySelector("nav")
      .classList.remove("Active_Navbar");
  }
});
const incDecAjax = (id, state, element, cart, setTotal) => {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../backend/ajax/qtyHandler.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("state=" + state + "&id=" + id + "&isCart=" + cart);
  xhttp.onreadystatechange = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      const data = JSON.parse(xhttp.responseText);
      element.value = data[0];
      setTotal.innerHTML = data[1];
      subTotalRequire();
    }
  };
};

const subTotalRequire = () => {
  let subTotalCart = document.getElementById("subTotal-cart") ?? 0;
  if (subTotalCart) {
    const cartAllQty = Array.from(
      document.querySelectorAll(".cartAllQty")
    ).reduce((acc, item) => Number(item.value) + Number(acc), [0]);
    const allCartTotal = Array.from(
      document.querySelectorAll(".allCartTotal")
    ).reduce((acc, item) => Number(item.innerHTML) + Number(acc), [0]);
    let tax = (allCartTotal * 12) / 100;
    let Finaltotal = allCartTotal + tax + 100;
    subTotalCart.querySelector("#sTotal").innerHTML = allCartTotal?.toFixed(2);
    subTotalCart.querySelector("#tax").innerHTML = tax?.toFixed(2);
    subTotalCart.querySelector("#total").innerHTML = Finaltotal?.toFixed(2);
  }
};
subTotalRequire();

Array.from(document.querySelectorAll(".inc"))?.forEach((btn) => {
  btn.addEventListener("click", function () {
    incDecAjax(
      this.name,
      1,
      this.parentElement.querySelector("input"),
      this.value,
      this.parentElement.parentElement.parentElement.querySelector(".totalSet")
    );
    console.log(this.parentElement.querySelector("input").value);
  });
});

Array.from(document.querySelectorAll(".dec"))?.forEach((btn) => {
  btn.addEventListener("click", function () {
    incDecAjax(
      this.name,
      0,
      this.parentElement.querySelector("input"),
      this.value,
      this.parentElement.parentElement.parentElement.querySelector(".totalSet")
    );
  });
});
Array.from(document.querySelectorAll(".removeCart"))?.forEach((btn) => {
  btn.addEventListener("click", function () {
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../backend/ajax/deleteCartWish.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + this.name + "&isCart=" + this.value);
    xhttp.onreadystatechange = () => {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        if (xhttp.responseText) {
          const response = JSON.parse(xhttp.responseText);
          this.parentElement.parentElement.remove();
          if (response[1] == 0) {
            Swal.fire({
              title: "Good job!",
              text: response[0],
              icon: "success",
              showCancelButton: false,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "OK",
            }).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire("Good job!", response[0], "success");
          }

          if (this.value != 0) {
            document.getElementById("cartcount").innerHTML =
              "(" + response[1] + ")";
            document.getElementById("countCart").innerHTML = response[1];
          } else {
            document.getElementById("countWish").innerHTML = response[1];
            document.getElementById("wishcount").innerHTML =
              "(" + response[1] + ")";
          }
        } else {
          Swal.fire("Some Error!", "Please Try Again Later", "error");
        }
        subTotalRequire();
      }
    };
  });
});

window.addEventListener("load", (e) => {
  if (localStorage.getItem("hasCodeRunBefore") === null) {
    localStorage.setItem("hasCodeRunBefore", true);
    document.getElementById("loader").style.background = "#fff";
    setTimeout(() => {
      document.getElementById("loader").style.visibility = "hidden";
      document.getElementById("loader").style.opacity = 0;
      document.getElementById("loader").style.scale = 2;
    }, 3000);
  } else {
    setTimeout(() => {
      document.getElementById("loader").style.visibility = "hidden";
      document.getElementById("loader").style.opacity = 0;
      document.getElementById("loader").style.scale = 2;
      // document.getElementById("loader").parentElement.style.background = "#fff";
    }, 700);
  }
});

const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 0;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

// filter in shop page
const setAllProducts = (catId = [], stock = [], min = 0, max = 100000) => {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", `../backend/ajax/getProducts.php`, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(
    "catId=" +
      catId?.toString() +
      "&stock=" +
      stock +
      "&min=" +
      min +
      "&max=" +
      max
  );
  xhttp.onreadystatechange = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("products").innerHTML = "";
      const products = JSON.parse(xhttp.responseText);
      document.getElementById("prtCount").innerHTML = products.length;
      products.map((item) => {
        let card = document.createElement("a");
        card.href = `./product-view.php?product_id=${item.prd_id}`;
        card.className = "product_box relative";
        card.setAttribute("data-aos", "zoom-in");
        card.setAttribute("data-aos-duration", "2000");
        card.innerHTML = `<div class="img"><figure><img src="../backend/images/${
          item.image1
        }" alt="" /><img src="../Assets/products/iphone2.png" alt="" class="secondImg" /></div></figure><div class="content"><p class="name">${
          item.name
        }</p><p class="categoryTitle">${
          item.category
        }</p><p class="flex jt-end price items-center"><span>&#x20B9;${Number(
          item.price
        ).toFixed(2)}</span> <del>${
          Number(item.price) + 100
        }</del></p><div class="buttons"><button name="${
          item.prd_id
        }" class="addToCart"><span><i class="bi bi-cart-fill"></i>Add to Cart</span> <span><i class="bi bi-cart"></i></span> <span><i class="bi bi-clipboard-check-fill"></i>Added to Cart</span></button></div></div><button name="${
          item.prd_id
        }" class="wish-btn addToWish"><i class="bi bi-heart"></i></button>`;
        document.getElementById("products").appendChild(card);
      });
    }
    addToWish(document.querySelectorAll(".addToWish"));
    addToCart(document.querySelectorAll(".addToCart"));
    Array.from(document.querySelectorAll(".addToCart"))?.forEach((item) => {
      checkWishCart(item, item.name, 1);
    });
    Array.from(document.querySelectorAll(".addToWish"))?.forEach((item) => {
      checkWishCart(item, item.name, 0);
    });
  };
};

let catArr = [];
let stock = [];
let min = 0;
let max = 100000;
if (document.querySelector("#sideBarFilter")) {
  Array.from(
    document.querySelector("#sideBarFilter").querySelectorAll("input")
  ).forEach((item) =>
    item.addEventListener("change", function () {
      console.log(catArr);
      if (this.name === "cat") {
        if (this.checked) {
          catArr.push(this.value);
        } else {
          catArr = catArr.filter((item) => item !== this.value);
        }
      }
      if (this.name === "stock") {
        if (this.checked) {
          stock = this.value;
        } else {
          stock = 0;
        }
      }
      if (this.name === "min") {
        min = this.value;
      }
      if (this.name === "max") {
        max = this.value;
      }

      setAllProducts(catArr, stock, min, max);
    })
  );
}

if ($("#exzoom").length > 0) {
  $("#exzoom").exzoom({
    navWidth: 60,
    navHeight: 60,
    navItemNum: 5,
    navItemMargin: 7,
    navBorder: 1,
    autoPlay: true,
    autoPlayTimeout: 2000,
  });
}

$(".testimonialData").slick({
  dots: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 4,
  slidesToScroll: 1,
  nextArrow:
    '<button class="slick-next"><i class="bi bi-chevron-right"></i></button>',
  prevArrow:
    '<button class="slick-prev"><i class="bi bi-chevron-left"></i></button>',
});

Array.from(document.querySelectorAll(".openUserProfile")).forEach((item) => {
  document.getElementById("BookingHistory").style.display = "block";
  document.getElementById("personalInfo").style.display = "none";
  item.addEventListener("click", (e) => {
    if (e.target.value === "order") {
      document.getElementById("BookingHistory").style.display = "block";
      document.getElementById("personalInfo").style.display = "none";
    } else {
      document.getElementById("personalInfo").style.display = "block";
      document.getElementById("BookingHistory").style.display = "none";
    }
  });
});
