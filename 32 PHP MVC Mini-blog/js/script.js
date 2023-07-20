(function () {
    let container = document.querySelector('.news-container');
    let moreNewsBtn = document.querySelector('#more-news');

    // если элементов на странице нет, выходим из функции
    if (!container || !moreNewsBtn) return;

    let start = 0; // начальная строка
    let limit = 3; // количество строк

    /**
     * функция для отображения новостей на странице
     */
    let showPosts = function(data){
        // формируем из массива объектов строку для вывода
        let output = data.map(function(newsItem){
            //console.log(newsItem);
            return `
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="news_detail.php?news_id=${newsItem.id}">
                            <img src="${newsItem.image}" alt="${newsItem.title}" class="img-fluid rounded">
                        </a>
                        <div class="excerpt">
                            <h2>
                                <a href="news_detail.php?news_id=${newsItem.id}">${newsItem.title}</a>
                            </h2>
                            <p><a href="news_detail.php?news_id=${newsItem.id}">Подробнее...</a></p>
                        </div>
                    </div>
                </div>
            `
        }).join('');
        //console.log(output);

        // выводим новости на страницу
        container.insertAdjacentHTML('beforeend', output);

    }

    /**
     * функция для получения новостей от сервера
     */
    async function getPosts(){
        // отправляем GET запрос на наш сервер
        let response = await fetch(`/server/getNewsList.php?start=${start}&limit=${limit}`);
        let data = await response.json();
        //console.log(data);

        showPosts(data);// отображаем данные на странице
    }
    getPosts();


    /**
     * обработка события клика по ссылке ЕЩЕ
     */
    moreNewsBtn.addEventListener('click', function(event){
        event.preventDefault(); // отменяем стандартный переход по ссылке
        start += limit;// увеличиваем отступ
        getPosts();// берем еще посты из бд и добавляем в контейнер
    });

})();