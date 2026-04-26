<?php
$role = $_SESSION['role'] ?? 'admin';
$name = $_SESSION['name'] ?? 'User';

$navLinks = [
    'admin' => [
        ['page'=>'admin.dashboard',   'label'=>'Dashboard'],
        ['page'=>'admin.semesters',   'label'=>'Semesters'],
        ['page'=>'admin.courses',     'label'=>'Courses'],
        ['page'=>'admin.professors',  'label'=>'Professors'],
        ['page'=>'admin.students',    'label'=>'Students'],
        ['page'=>'admin.enrollments', 'label'=>'Enrollments'],
        ['page'=>'admin.assignments', 'label'=>'Assignments'],
    ],
    'professor' => [
        ['page'=>'professor.grades', 'label'=>'Grade Entry'],
    ],
    'student' => [
        ['page'=>'student.dashboard', 'label'=>'My Grades'],
        ['page'=>'student.history',   'label'=>'History'],
    ],
];
$currentPage = $_GET['page'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= h($pageTitle ?? 'GPA System') ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<div class="sidebar">
  <div class="sidebar-brand">GPA System</div>
  <ul class="nav flex-column flex-grow-1">
    <?php foreach ($navLinks[$role] ?? [] as $link): ?>
    <li class="nav-item">
      <a class="nav-link <?= $currentPage===$link['page']?'active':'' ?>"
         href="index.php?page=<?= $link['page'] ?>">
        <?= $link['label'] ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
  <div class="sidebar-footer">
    <small><?= h($name) ?> · <?= h($role) ?></small>
    <a href="index.php?page=logout" class="btn btn-outline-secondary btn-sm w-100">Logout</a>
  </div>
</div>

<div class="main-content">
  <div class="topbar"><?= h($pageTitle ?? '') ?></div>

  <?php $flash = getFlash(); if ($flash): ?>
  <div class="px-4 pt-3">
    <div class="alert alert-<?= h($flash['type']) ?> alert-dismissible fade show py-2 small" role="alert">
      <?= h($flash['msg']) ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  </div>
  <?php endif; ?>

  <div class="content-body">
