(function () {
    let container = document.querySelector('.news-container');
    let moreNewsBtn = document.querySelector('#more-news');

    if (!container || !moreNewsBtn) return;

    let start = 0;
    let limit = 3;


    /**
     * функция для получения новостей от сервера
     */
    async function getPosts(){
        // отправляем GET запрос на наш сервер
        let response = await fetch(`/server/getNewsList.php?start=${start}&limit=${limit}`);
        console.log(response);
        let data = await response.json();
        console.log(data);
    }
    getPosts();









})();