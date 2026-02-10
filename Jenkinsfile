pipeline {
  agent any

  environment {
    IMG = "wp-local:test"
    NET = "wpnet"
  }

  stages {
    stage('Build') {
      steps {
        sh "docker build -t ${IMG} ."
      }
    }

    stage('Deploy') {
      steps {
        sh """
          docker network create ${NET} || true
          docker rm -f wp || true

          docker run -d --name wp --network ${NET} -p 8090:80 \
            -e WORDPRESS_DB_HOST=wpdb:3306 \
            -e WORDPRESS_DB_USER=wpuser \
            -e WORDPRESS_DB_PASSWORD=wppass \
            -e WORDPRESS_DB_NAME=wordpress \
            ${IMG}
        """
      }
    }
  }
}
