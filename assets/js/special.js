// let currentPage = 1;
// const totalPages = 3;

// function goToPage(page) {
//   currentPage = page;

//   // 記事の表示切替
//   document.querySelectorAll('.interview__article').forEach(el => el.style.display = 'none');
//   document.querySelector(`.interview__article--page${page}`).style.display = 'block';

//   // ページ番号ボタンのactive切替
//   for (let i = 1; i <= totalPages; i++) {
//     document.getElementById(`interview__btn${i}`).classList.remove('active');
//   }
//   document.getElementById(`interview__btn${page}`).classList.add('active');
// }

// function changePage(direction) {
//   if (direction === 'next' && currentPage < totalPages) {
//     goToPage(currentPage + 1);
//   } else if (direction === 'prev' && currentPage > 1) {
//     goToPage(currentPage - 1);
//   }
// }

// // 初期表示
// goToPage(1);

// インタビューページ
let currentPage = 1;
const totalPages = 3;

function goToPage(page) {
  currentPage = page;

  // 記事の表示切替
  document.querySelectorAll('.interview__article').forEach(el => el.style.display = 'none');
  document.querySelector(`.interview__article--page${page}`).style.display = 'block';

  // ページ番号ボタンのactive切替
  for (let i = 1; i <= totalPages; i++) {
    document.getElementById(`interview__btn${i}`).classList.remove('active');
  }
  document.getElementById(`interview__btn${page}`).classList.add('active');

  // スクロールを即座にトップへ
  window.scrollTo(0, 0);
}

function changePage(direction) {
  if (direction === 'next' && currentPage < totalPages) {
    goToPage(currentPage + 1);
  } else if (direction === 'prev' && currentPage > 1) {
    goToPage(currentPage - 1);
  }
}

// 初期表示
goToPage(1);