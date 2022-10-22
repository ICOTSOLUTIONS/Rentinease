<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 How To Create Multi Language Website Tutorial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-75 m-auto">
                    <div class="card-header text-center bg-primary text-white">
                        <h4 style="font-size: 17px;">Laravel 9 How To Create Multi Language Website Tutorial</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>Select Language: </strong>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select changeLang">
                                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                                        English
                                    </option>
                                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                                        France
                                    </option>
                                    <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>
                                        Spanish
                                    </option>
                                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                                        Arabic
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div style="margin-top: 20px;">
                            <p>{{ GoogleTranslate::trans('Welcome to Online Web Tutor', app()->getLocale()) }}</p>
                            <p>{{ GoogleTranslate::trans('Hello Tutorial, The Best Platform to learn PHP Concepts', app()->getLocale()) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>

</body>

</html>