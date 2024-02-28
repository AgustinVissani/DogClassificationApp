<template>
  <q-page class="q-layout-page-container no-padding-top bg-white q-pb-xl">
    <div class="tell-us-about q-pt-xl">
      <div class="row clients-are-saying">
        <div class="col-12 q-mb-xl">
          <h2 class="title text-center"><strong>Tell us about</strong> your needs!</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12 offset-md-3 form-container q-pa-md">
          <q-form @submit="submitForm" autocomplete="off">
            <div class="row">
              <div class="col-md-6 col-xs-12 block-fields">
                <q-field
                  v-model="name"
                  label="Your name"
                  stack-label
                  :rules="[val => !!val || 'Please fill your name']"
                >
                  <q-icon name="fa fa-user" />
                </q-field>
                <q-field
                  v-model="company"
                  label="Company name"
                  stack-label
                  :rules="[val => !!val || 'Please fill your company name']"
                >
                  <q-icon name="fa fa-building" />
                </q-field>
                <q-field
                  v-model="email"
                  label="Email"
                  stack-label
                  :rules="[
                    val => !!val || 'Please fill your email',
                    val => /\S+@\S+\.\S+/.test(val) || 'Invalid email format',
                  ]"
                >
                  <q-icon name="email" />
                </q-field>
              </div>
              <div class="col-md-6 col-xs-12 block-fields">
                <q-field
                  v-model="message"
                  label="Your message"
                  stack-label
                  :rules="[val => !!val || 'Please fill your message']"
                  type="textarea"
                  rows="5"
                />
                <div class="q-field row no-wrap items-start q-field-responsive q-field-no-label q-field-with-error q-field-no-input">
                  <div class="row col">
                    <div class="q-field-content col-xs-12 col-sm">
                      <q-checkbox
                        v-model="acceptConditions"
                        label="I accept the Legal"
                        :rules="[val => val || 'Please accept the Legal Conditions']"
                      >
                        <a href="https://www.europelanguagejobs.com/eulangjobs/legal-conditions" target="_blank">
                          Conditions
                        </a>
                      </q-checkbox>
                    </div>
                  </div>
                </div>
                <div class="row justify-center q-mt-md">
                  <q-btn :disable="isFormDisabled" @click="submitForm" class="send-message bg-primary text-white q-btn-rectangle">
                    Send message
                  </q-btn>
                </div>
                <div class="row justify-center q-mt-md">
                  <q-link to="/companies/registry" class="post-a-job">
                    or post a job
                  </q-link>
                </div>
              </div>
            </div>
          </q-form>
        </div>
      </div>
    </div>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      name: '',
      company: '',
      email: '',
      message: '',
      acceptConditions: false,
    };
  },
  computed: {
    isFormDisabled() {
      return !this.name || !this.company || !this.email || !this.message || !this.acceptConditions;
    },
  },
};
</script>

<style scoped>
.tell-us-about {
  margin-bottom: 50px;
}
.clients-are-saying .title {
  color: #0c3866;
  font-size: 22px;
}
.tell-us-about .form-container {
  background-color: #f4f4f4;
  padding: 30px;
}
.send-message,
.post-a-job {
  margin-top: 28px;
}
.send-message {
  border-radius: 30px;
}
.post-a-job {
  color: #0c3866;
  display: block;
  cursor: pointer;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
}
</style>
