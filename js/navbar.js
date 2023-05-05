var trecho1 = `
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My account
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Account details</a></li>
            <li><a class="dropdown-item" href="#">My requests</a></li>
            <li><a class="dropdown-item" href="#">Service chat</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </li>
      `;

var trecho2 = `
        <li class="nav-item">
          <a class="nav-link" href="/steam-clone/RegisterUsers.php">Log in</a>
        </li>
      `;

if (usuarioLogado) {
    document.querySelector(".user-log").innerHTML += trecho1;
} else {
    document.querySelector(".user-log").innerHTML += trecho2;
}