import $ from 'jquery';

class Like {
    constructor() {
        this.events();
    }

    events() {
        $(".like-box").on('click', this.ourClickDispatcher.bind(this));
    }

    // Methods
    ourClickDispatcher(e) {
        const currentLikeBox = $(e.target).closest('.like-box');

        if (currentLikeBox.attr('data-exists') == 'yes') {
            this.deleteLike(currentLikeBox);
        } else {
            this.createLike(currentLikeBox);
        }
    }

    createLike(currentLikeBox) {
        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader('X-WP-Nonce', siemaData.nonce);
            },
            url: siemaData.root_url + '/wp-json/siema/v1/manageLike/',
            type: 'POST',
            data: {
                id: currentLikeBox.data('professor')
            },
            success: (response) => {
                
                currentLikeBox.attr('data-exists', 'yes');
                let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
                console.log('Dodaje');
                console.log(likeCount);
                likeCount++;

                currentLikeBox.find('.like-count').html(likeCount);
                currentLikeBox.attr('data-like', response);
                console.log(response);
            },
            error: (e) => {
                // console.log('Nie Stworzone');
                console.log(e);
            },
        });
    }
    
    deleteLike(currentLikeBox) {
        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader('X-WP-Nonce', siemaData.nonce);
            },
            url: siemaData.root_url + '/wp-json/siema/v1/manageLike/',
            type: 'DELETE',
            data: {
                like: currentLikeBox.attr('data-like')
            },
            success: (response) => {
                currentLikeBox.attr('data-exists', 'no');
                let likeCount = parseInt(currentLikeBox.find('.like-count').html(), 10);
                console.log('Odejmuje');
                console.log(likeCount);
                likeCount--;

                currentLikeBox.find('.like-count').html(likeCount);
                currentLikeBox.attr('data-like', '');
                console.log(response);
            },
            error: (e) => {
                // console.log('Nie Unięte');
                console.log(e);
            },
        });
    }

}

export default Like;