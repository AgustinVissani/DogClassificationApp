<template>
  <div class="no-padding-top page-container layout-padding">
    <div class="row hiring-solutions">
      <div class="col-12">
        <h2 class="title text-center">
          ELJ's
          <strong>hiring solutions</strong>
        </h2>
      </div>
      <div class="col-12 q-mt-xl">
        <div class="hiring-row">
          <div class="col-3">
            <div class="col">
              <img src="/job-posting.svg" alt="" />
            </div>
            <div class="col q-pt-sm text-center">
              <span class="hiring-solutions-text"> JOB POSTING </span>
            </div>
          </div>
          <div class="col-3">
            <div class="col">
              <img src="/cv-search.svg" alt="CV SEARCH" />
            </div>
            <div class="col q-pt-sm text-center">
              <span class="hiring-solutions-text"> CV SEARCH </span>
            </div>
          </div>
          <div class="col-3">
            <div class="col">
              <img src="/exposure-features.svg" alt="" />
            </div>
            <div class="col q-pt-sm text-center">
              <span class="hiring-solutions-text">
                WEBSITE <br />
                VISIBILITY
              </span>
            </div>
          </div>
          <div class="col-3">
            <div class="col">
              <img src="/outreach-features.svg" alt="JOB POSTING" />
            </div>
            <div class="col q-pt-sm text-center">
              <span class="hiring-solutions-text">
                OUTREACH <br />
                FEATURES
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.hiring-solutions {
  padding-bottom: 50px;
}

.hiring-solutions .title {
  color: #0c3866;
  font-size: 22px;
}

.hiring-row {
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  gap: 75px;
}

.hiring-solutions-text {
  font-family: Lato;
  font-weight: 700;
  color: #0c3866;
  font-size: 18px;
}
</style>
