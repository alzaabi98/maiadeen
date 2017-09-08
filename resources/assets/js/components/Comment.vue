<template>
	<div>
		<div class="box">
			<article class="media" v-for="user in loadedUsers" :key="user.id">
				<div class="media-content">
					<p>{{user.comment}}</p>
					<h4>{{user.name}}</h4>
				</div>
				<div class="media-right">
					20 Sep 2017
				</div>

			</article>
		</div>
		<hr>
		 <b-pagination
            :total="users.length"
            :current.sync="current"
            :order="order"
            :size="size"
            :simple="isSimple"
            :per-page="perPage" @change="paginateAction">
        </b-pagination>
	</div>
</template>

<script>
	export default {

		props: {

			'users': {
				type: Array
			}
		}, 
		data () {
			return {
				current: 1,
				index: 0,
				size: '',
				perPage: 10,
				order: '',
				isSimple: false,
				filteredUsers: [],
				loadedUsers: [],
				
			}
		},
		mounted () {
			let slicedUsers = this.users.slice(this.index,this.perPage )
			this.loadedUsers = slicedUsers
			console.log('index = ' + this.index)
			console.log(slicedUsers)
			this.index = this.index + this.perPage
			
		},
		computed: {
			noOfPgaes () {
				Math.ceil(this.users.length / this.perPage)
			}
		},
		methods : {
			paginateAction(e) {
				//console.log(e)
				console.log('index = ' + this.index)
				// var newUsers = this.users.filter(user => user.id > e)
				if (e === 1) {
					this.index = 0
				}
				let app = this
				let slicedUsers = this.users.slice(app.index, app.index + app.perPage)

				console.log(slicedUsers)
				this.loadedUsers = slicedUsers


				
				// if (e < this.noOfPgaes) {
				this.index = this.index + this.perPage	
				// }
				


				//console.log('paginate triggered with current = ' + this.current )
			}
		}

	}
</script>

<style scoped>
	p {
		font-weight: 16px;
		color:grey;

	}
	h4 {
		color: black;
		font-weight: 10px;
	}
</style>