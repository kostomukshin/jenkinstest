pipeline {
  agent any

  environment {
    AWS_REGION   = "eu-west-1"
    ECR_REPO     = "123456789012.dkr.ecr.eu-west-1.amazonaws.com/custom-wordpress" // твой ecr_repository_url
    ECR_REGISTRY = "123456789012.dkr.ecr.eu-west-1.amazonaws.com"                 // без /custom-wordpress
    IMAGE_TAG    = "latest"
    ASG_NAME     = "wp-asg"
  }

  stages {
    stage('Checkout') {
      steps { checkout scm }
    }

    stage('Build') {
      steps {
        sh """
          set -eux
          docker build -t custom-wordpress:${IMAGE_TAG} .
        """
      }
    }

    stage('Login & Push to ECR') {
      steps {
        sh """
          set -eux
          aws sts get-caller-identity

          aws ecr get-login-password --region ${AWS_REGION} | \
            docker login --username AWS --password-stdin ${ECR_REGISTRY}

          docker tag custom-wordpress:${IMAGE_TAG} ${ECR_REPO}:${IMAGE_TAG}
          docker push ${ECR_REPO}:${IMAGE_TAG}
        """
      }
    }

    stage('Instance Refresh') {
      steps {
        sh """
          set -eux
          aws autoscaling start-instance-refresh \
            --auto-scaling-group-name ${ASG_NAME} \
            --preferences MinHealthyPercentage=50,InstanceWarmup=180 \
            --region ${AWS_REGION}
        """
      }
    }
  }
}
