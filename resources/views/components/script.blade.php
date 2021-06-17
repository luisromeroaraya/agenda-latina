<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    new Glide(".glide", {
        type: "carousel",
        startAt: 0,
        perView: 1,
    }).mount();
    new Glide(".glide_parties", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_concerts", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_sports", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_festivals", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_expositions", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_plays", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_projections", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_dances", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_kids", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_talks", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
    new Glide(".glide_others", {
        type: "carousel",
        startAt: 0,
        perView: 3,
        breakpoints: {
            1024: {
                perView: 2,
            },
            768: {
                perView: 1,
            },
        },
    }).mount();
</script>