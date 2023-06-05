<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Simple Form</title>


    <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .number-badge{
        border: 1px solid  #ccc;
        width: 30px;
        height: 30px;
        display: inline-block;
        border-radius: 50%;
        text-align: center;
        margin-right: 10px;
      }

      .form-item{
        /* padding-left: 30px; */
        border-right: 1px solid #ccc;
      }

      #top-nav li.list-group-item{
        border: 0px;
        font-size: 16px;
      }

      .active-top-item{
        font-weight: 500;
        border-bottom: 3px solid #007bff !important;
      }
      label{
        font-weight: 500;
      }
      #form-card{
        border-top: 0px;
        box-shadow: 0px 4px 15px -6px rgba(0,0,0,0.69);
        -webkit-box-shadow: 0px 4px 15px -6px rgba(0,0,0,0.69);
        -moz-box-shadow: 0px 4px 15px -6px rgba(0,0,0,0.69);
        }

        .theme-border-primary {
            border-color: #00A6F2;
        }
        .theme-primary {
            color: #00A6F2;
        }
        .bg-theme-primary {
            background-color: #00A6F2;
        }
        .theme-icon-primary  {
            color: #0083CC;
        }
        .icon-2-5xl {
            font-size: 2.5em;
        }
        .icon-4-5xl {
            font-size: 4.5em;
        }
        .diagonal-forward {
        border-bottom: 2px solid #cacaca;
        width: 105%;
        transform: rotate(60deg);
        transform-origin: top left;
        }
        .diagonal-reverse {
        border-bottom: 2px solid #cacaca;
        width: 105%;
        transform: rotate(-60deg);
        transform-origin: bottom left;
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="features.css" rel="stylesheet"> -->
  </head>
  <body>

<main>
  <div class="">
    <ul class="list-group list-group-horizontal" id="top-nav">
      <li class="list-group-item ms-4"><img src="logo.png"></li>
      <li class="list-group-item pt-3 active-top-item">Illinois Name Check</li>
      <li class="list-group-item pt-3">Code Verifier</li>
    </ul>
  </div>

    <div class="grid md:grid-cols-10 border-y-2 border-gray-300 font-sans">
        <div class="flex gap-4">
            <div class="flex items-center gap-3 font-semibold p-4">
                <i class="fa-solid fa-circle-check theme-icon-primary icon-2-5xl"></i> Intro
            </div>
        </div>
        <div class="hidden md:block relative w-12 justify-self-end">
            <div class="absolute diagonal-forward top-0"></div>
            <div class="absolute diagonal-reverse bottom-0"></div>
        </div>
        <div class="flex gap-4">
            <div class="flex items-center gap-3 font-semibold p-4">
                <i class="fa-solid fa-circle-check theme-icon-primary icon-2-5xl"></i> Disclosures
            </div>
        </div>
        <div class="hidden md:block relative w-12 justify-self-end">
            <div class="absolute diagonal-forward top-0"></div>
            <div class="absolute diagonal-reverse bottom-0"></div>
        </div>
        <div class="flex gap-4 theme-primary">
            <div class="flex items-center text-center  gap-3 font-semibold p-4">
                <div class="rounded-full border-2 flex justify-center items-center theme-border-primary h-10 w-10">03</div> Requestor
            </div>
        </div>
        <div class="hidden md:block relative w-12 justify-self-end">
            <div class="absolute diagonal-forward top-0"></div>
            <div class="absolute diagonal-reverse bottom-0"></div>
        </div>
        <div class="flex gap-4 text-gray-400">
            <div class="flex items-center gap-3 font-semibold p-4">
                <div class="rounded-full border-2 flex justify-center items-center border-gray-400 h-10 w-10">04</div> Subject
            </div>
        </div>
        <div class="hidden md:block relative w-12 justify-self-end">
            <div class="absolute diagonal-forward top-0"></div>
            <div class="absolute diagonal-reverse bottom-0"></div>
        </div>
        <div class="flex gap-4 text-gray-400">
            <div class="flex items-center gap-3 font-semibold p-4">
                <div class="rounded-full border-2 flex justify-center items-center border-gray-400 h-10 w-10">05</div> Review
            </div>
        </div>
    </div>

    <div class="px-5 py-1">

    <div class="row g-4 py-5 font-sans">
        <div class="card" id="form-card">
        <div class="card-body">

            <div class="row">
            <div class="col mt-3">
                <h4 class="text-lg font-bold">Requestor Information</h4>
                <p class="font-light">Contact information for the person requesting the name check. Results will be sent to the email address provided below.</p>
            </div>
            <hr class="my-4 bg-gray-400">
            </div>

            <div class="row">
            <div class="col-md-6 col-sm-12">

                <form class="row g-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label font-medium">Requestor First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstName" placeholder="John">
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label font-medium">Requestor Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastName" placeholder="Doe">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label font-medium">Requestor Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="johndoe@gmail.com">
                </div>
                <div class="col-md-6">
                    <label for="emailConfirmation" class="form-label font-medium">Email Confirmation <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="emailConfirmation" placeholder="johndoe@gmail.com">
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label font-medium">Requestor Phone <span class="text-danger">*</span></label>

                    <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" style="border-right:0px; border-color: #ced4da">Mobile</button>
                    <ul class="dropdown-menu">

                    </ul>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="+1 (555) 987-6543">
                    </div>

                </div>


                </form>

            </div>
            <div class="col-md-6 col-sm-12">
                <img src="contact-us.png" width="100%">
            </div>
            </div>

        </div>
        </div>
    </div>

    <div class="row g-4 py-5">
        <div class="col">
        <button class="btn btn-primary">Previous</button>
        </div>

        <div class="col text-end">
        <button class="btn btn-primary">Next</button>
        </div>

    </div>
    </div>

    <div class="b-example-divider"></div>

</main>
  </body>
</html>
