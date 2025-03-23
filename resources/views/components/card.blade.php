<div class="container">
    <div class="row">
        @for ($card = 0; $card < 4; $card++)
        <div class="col-12 col-md-3 g-2" {{ $card }}>
            <div class="card" style="width: 100%;">
                <img src="https://th.bing.com/th/id/OIP.AK1fXVQ9CQO0YnDAOB5koQHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">STY</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                    </p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>