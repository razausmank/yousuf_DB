<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong ">
        <div class=" container-fluid">
            <a class="t navbar-brand" href="{{route('home')}}">INVENTORY MANAGEMENT SYSTEM</a>
            <button class="me navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
                    <li class=" nav-item">
                        <a class="t nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="t nav-link" href="#">Link</a>
          </li> -->
                    <li class="nav-item dropdown">
                        <a class="t nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Modules
                        </a>
                         <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('er')}}">E/R Diagram</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('ct')}}">Relational Schema</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('sc')}}">SQL Code</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('pyt')}}">Python Code</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('index')}}">SQL & DB</a></li>
                            <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="pdp.html">PERL Database Programming</a></li> -->
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <h2 class="he3">RELATIONAL SCHEMA:</h2>
    <img class="pic4" src="{{ URL::asset('assets/img/pic4.png') }}" alt="">
    <h3 class="he44">DESCRIPTION:</h3>
    <h5 class="he5">2)FUNCTIONAL DEPENDENCIES:</h5>
    <!-- <pre class="bigp" style="word-wrap: break-word; white-space: pre-wrap;"> -->
    <p class="cc p4">Logins:</p>
    <p class="p4">• login_id -> login_role_id, login_userName, login_user_Password</p>
    <p class="cc p4"> Permission:</p>
    <p class="p4"> • permission_id -> permission_names, permission_role_id, permission_module</p>
    <p class="cc p4">Users:</p>
    <p class="p4"> • userid -> username, user_email, user_address, usermobile_no</p>
    <p class="cc p4">Roles:</p>
    <p class="p4">• roleid -> login_id, role_name, role_designation</p>
    <p class="cc p4">Customer:</p>
    <p class="p4">• customer_id -> login_id, customer_name, customer_password, customer_email, customer_address,
        customer_mobileno</p>
    <p class="cc p4">Inventory:</p>
    <p class="p4">• inventory_id -> inventory_items, inventory_number, inventory_type, inventory_description</p>
    <p class="cc p4">Payment:</p>
    <p class="p4">• payment_id -> customer_id, payment_amount, payment_description, payment_date</p>
    <p class="cc p4">Stock:</p>
    <p class="p4">• stock_id -> inventory_id, stock_type, stock_description</p>


    <p class="p3">3)All relations in the schema are in BCNF as there are no nontrivial functional dependencies that
        violate BCNF.
        However, it is worth noting that BCNF only ensures that all non-trivial dependencies are based on superkeys, but
        it does not guarantee that there are no redundancies or anomalies in the data. For instance, the Customer table
        has a foreign key to Logins table, which implies that each customer must have a login, but there is no
        constraint on the type of role a customer can have. It is possible for a customer to have a login with an
        administrative role, which may not make sense in the real-world scenario. Therefore, further normalization to
        3NF or 4NF could be considered to remove such anomalies.
        To normalize to 3NF, we need to ensure that each non-key attribute is dependent only on the primary key and not
        on any other non-key attribute. In this schema, the only relation that is not in 3NF is Customer, as
        customer_password is dependent on login_user_Password in the Logins table. We can decompose Customer into two
        relations:
        Customer(customer_id, login_id, customer_name, customer_email, customer_address, customer_mobileno)
        CustomerPassword(login_id, customer_password)
        Now, each relation has a single primary key and no transitive dependencies. The CustomerPassword relation only
        stores the password for each login and is not related to any other tables.</p>
    <p class="p3">4)To normalize to 4NF, we need to eliminate multi-valued dependencies (MVDs) from the schema.
        There are no MVDs in the given schema, so 4NF is not applicable.In summary, the given schema is in BCNF, but
        some tables could benefit from further normalization to remove redundancies and anomalies.
    </p>



</body>

</html>
