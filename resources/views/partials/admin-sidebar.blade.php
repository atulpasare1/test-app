<ul class="menu-inner py-1">
  <!-- Dashboards -->
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link ">
      <i class="menu-icon tf-icons ri-home-smile-line"></i>
      <div data-i18n="Dashboard">Dashboard</div>
      <div class="badge bg-danger rounded-pill ms-auto">5</div>
    </a>

  </li>



  <!--Engage -->
  <li class="menu-header mt-5">
    <span class="menu-header-text" data-i18n="Engage">Engage</span>
  </li>
   <!-- Manage Exams menu start -->
  <li class="menu-item ">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons ri-graduation-cap-line"></i>
      <div data-i18n="Manage Exams">Manage Exams</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item ">
        <a href="{{route('quiz')}}" class="menu-link">
          <div data-i18n="Quizzes">Quizzes</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="app-academy-course.html" class="menu-link">
          <div data-i18n="Exams">Exams</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('categories')}}" class="menu-link">
          <div data-i18n="Exams category">Exams category</div>
        </a>
      </li>

    </ul>
  </li>
  <!-- Manage Learning menu start -->
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons ri-shopping-bag-3-line"></i>
      <div data-i18n="Manage Learning">Manage Learning</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item">
        <a href="app-ecommerce-dashboard.html" class="menu-link">
          <div data-i18n="Practice Sets">Practice Sets</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link ">
          <div data-i18n="Lessions">Lessions</div>
        </a>

      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link ">
          <div data-i18n="Videos">Videos</div>
        </a>
      </li>


    </ul>
  </li>
  <!-- e-commerce-app menu end -->
  <!-- Academy menu start -->

  <!-- Academy menu end -->

  <li class="menu-header mt-5">
    <span class="menu-header-text" data-i18n="Library">Library</span>
  </li>
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons ri-car-line"></i>
      <div data-i18n="Question Bank">Question Bank</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item">
        <a href="{{route('question')}}" class="menu-link">
          <div data-i18n="Questions"> Questions</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('question.import')}}" class="menu-link">
          <div data-i18n="Import Question">Import Question</div>
        </a>
      </li>
    </ul>
  </li>
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link ">
      <i class="menu-icon tf-icons ri-bill-line"></i>
      <div data-i18n="Video Bank">Video Bank</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link ">
      <i class="menu-icon tf-icons ri-bill-line"></i>
      <div data-i18n=" Lession Bank">Lession Bank</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link">
      <i class="menu-icon tf-icons ri-user-line"></i>
      <div data-i18n="Users">Users</div>
    </a>

  </li>

</ul>
