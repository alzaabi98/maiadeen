<template>
	<div class="columns">
		<div class="column is-2 has-text-centered">
			<h3 class="title m-t-50 ">
				{{average_rating}}
			</h3>
			<h5> <strong>Average Rating</strong></h5>
		</div>
		<div class="column is-6">
			<progress class="progress is-primary" :value="calculatePercent(rating[0])" max="100">"{{calculatePercent(rating[0])}}"</progress> 
			
			<progress class="progress is-primary" :value="calculatePercent(rating[1])" max="100">"{{calculatePercent(rating[1])}}"</progress> 

			<progress class="progress is-primary" :value="calculatePercent(rating[2])" max="100">"{{calculatePercent(rating[2])}}"</progress> 
			
			<progress class="progress is-primary" :value="calculatePercent(rating[3])" max="100">"{{calculatePercent(rating[3])}}"</progress>

			<progress class="progress is-primary" :value="calculatePercent(rating[4])" max="100">"{{calculatePercent(rating[4])}}"</progress>



		</div>
		<div class="column is-5">
			<p class="m-b-15"> 
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<span class="m-r-5"> <strong> {{calculatePercent(rating[0])}} %</strong></span>
			</p>

			<p class="m-b-15"> 
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<span class="m-r-5"> <strong> {{calculatePercent(rating[1])}} %</strong></span>
			</p>

			<p class="m-b-15"> 
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<span class="m-r-5"> <strong> {{calculatePercent(rating[2])}} %</strong></span>
			</p>

			<p class="m-b-15"> 
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<span class="m-r-5"> <strong> {{calculatePercent(rating[3])}} %</strong></span>
			</p>

				<p class="m-b-15"> 
				<i class="custom-star fa fa-star"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<i class="custom-star fa fa-star is-muted"></i>
				<span class="m-r-5"> <strong> {{calculatePercent(rating[4])}} %</strong></span>
			</p>
			
			
		</div>

		
	</div>
</template>

<script>
	export default {

		props: ['rating'] ,

		data () {
			return {
				average_all: 0,

				

			}

		},
		methods: {

			calculatePercent(num) {
				const percent = num/ this.total * 100

				return percent.toFixed(0)
			}
		},
		computed: {
			total() {
				const result = this.rating.reduce( (acc, curr) => {
					return acc + curr
				});

				return result

				
			},

			ave() {

				return this.total / this.rating.length
			},
			average_rating() {

				// let temp_array = []

				// for (let i = 0; i < 6 ; i++) { 
				// 	temp_array.push(i)
				// }
				let stars_total = 0
				let stars = 5
				for (let i=0 ; i < this.rating.length ; i++) {

					let temp = stars * this.rating[i]
					stars_total = stars_total + temp
					stars = stars - 1
					
					// let temp_percent = this.rating[i] / this.total * 100 

					// temp_array.push(temp_percent)
				}

				return (stars_total / this.total).toFixed(2)


			}

			

		}

	}
</script>

<style scoped>
	
	.custom-star {
    color: #00d1b2;
}
</style>