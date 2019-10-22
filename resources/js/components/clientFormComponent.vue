<template>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-default">Client Feedback Form</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" v-model="fullname" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="company" class="form-control" v-model="company" placeholder="Company">
                                </div>
                                 <div class="form-group">
                                    <textarea type="text" class="form-control" 
                                    v-model="message" placeholder="Lets Hear From You!"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button @click="sendRequest" type="button" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
     export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              fullname: '',
              company: '',
              message: '',
              text: 'Thanks For Yor Feedback'
            };
        },
        methods: {
            sendRequest(e) {
                e.preventDefault();
                let currentObj = this;
                this.axios.post('/client-feedback', {
                    fullname: this.fullname,
                    company: this.company,
                    message: this.message
                })
                .then(function (response) {
                    $('#modal-default').modal('hide')
                    // location.reload();
                    this.$toasted.show('Thanks For Yor Feedback')
                })
                .catch(function (error) {
                    $('#modal-default').modal('hide')
                    location.reload();
                });
            }
        }
    }
</script>
